var pageJs = {
    Init: function () {

    },
    validateSignUpForm: function () {
        var dd = this;
        if ($.trim($("#name").val()).length == 0) {
            global.myToast(4, "Error", "Por favor complete el nombre", 'toast-top-right', 'toast-top-right');
            $("#name").focus();
            $("#name").click();
            return false;
        }

        if ($.trim($("#lastname").val()).length == 0) {
            global.myToast(4, "Error", "Por favor complete el apellido", 'toast-top-right', 'toast-top-right');
            $("#lastname").focus();
            $("#lastname").click();
            return false;
        }

        if ($.trim($("#email").val()).length == 0) {
            global.myToast(4, "Error", "Por favor complete el email", 'toast-top-right', 'toast-top-right');
            $("#email").focus();
            $("#email").click();
            return false;
        }

        if (!global.isEmail($.trim($("#email").val()))) {
            global.myToast(4, "Error", "Por favor ingrese un email  valido", 'toast-top-right', 'toast-top-right');
            $("#email").val("");
            $("#email").focus();
            $("#email").click();
            return false;
        }

        if ($.trim($("#pass").val()).length == 0) {
            global.myToast(4, "Error", "Por favor complete la contraseña", 'toast-top-right', 'toast-top-right');
            $("#pass").focus();
            $("#pass").click();
            return false;
        }

        if ($.trim($("#pass").val()).length < 8) {
            global.myToast(4, "Error", "Por favor ingrese una contraseña de minimo 8 caracteres", 'toast-top-right', 'toast-top-right');
            $("#pass").focus();
            $("#pass").click();
            return false;
        }

        if ($.trim($("#pass2").val()).length == 0) {
            global.myToast(4, "Error", "Por favor repita la contraseña", 'toast-top-right', 'toast-top-right');
            $("#pass2").focus();
            $("#pass2").click();
            return false;
        }

        if ($.trim($("#pass").val()) != $.trim($("#pass2").val())) {
            global.myToast(4, "Error", "Las contraseñas no coinciden", 'toast-top-right', 'toast-top-right');
            $("#pass").val("");
            $("#pass2").val("");

            $("#pass").focus();
            $("#pass").click();
            return false;
        }

        return true;

    }, SignUp: function () {
        global.loadingBlock("Procesando.., Por favor espere");

        var response = global.Ajax("POST", {"action": 1, "form": $("#form-sign-up").serialize()}, "index.php", "json", true);
        response.then(function (data) {
            console.log(data);

            var data = JSON.parse(data);
            if (data.error) {
                global.myToast(4, "Error", data.message, 'toast-top-right', 'toast-top-right');


            } else {
                global.myToast(1, "Exito", data.message, 'toast-top-right', 'toast-top-right');
                window.location.href = "../complete/";
            }
            global.dismissLoadingBlock();
        }).catch(function (error) {
            console.log(error);
            global.dismissLoadingBlock();
        });
    }
};
$(document).ready(function () {
    pageJs.Init();
    $("#send").on("click", function () {
        if (pageJs.validateSignUpForm()) {
            pageJs.SignUp();
        }
    });
    $("#pass2").keypress(function (e) {
        if (e.which == 13) {
            if (pageJs.validateLoginForm()) {
                pageJs.sendData();
            }
        }
    });
});