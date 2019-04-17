var uploadCrop;
var resize;
var pageJs = {
    Init: function () {


    }, sendData: function () {
        global.loadingBlock("Procesando.., Por favor espere");
        var response = global.Ajax("POST", {"action": 1, "form": $("#login-form").serialize()}, "index.php", "json", true);
        response.then(function (data) {
            console.log(data);
            var data = JSON.parse(data);
            if (data.error) {
                global.myToast(4, "Error", data.message, 'toast-top-right', 'toast-top-right');
                $("#password").val("");
                $("#password").focus();
                $("#password").click();
            } else {
                global.myToast(1, "Exito", data.message, 'toast-top-right', 'toast-top-right');
                window.location.href = data.url;
            }
            global.dismissLoadingBlock();
        }).catch(function (error) {
            console.log(error);
            global.dismissLoadingBlock();
        });
    },
    validateLoginForm: function () {

        if ($.trim($("#username").val()).length == 0) {
            global.myToast(4, "Error", "Por favor ingrese su usuario", 'toast-top-right', 'toast-top-right');
            $("#username").focus();
            $("#username").click();
            return false;
        }

        if (!global.isEmail($("#username").val())) {
            global.myToast(4, "Error", "Su usuario debe ser un correo electronico", 'toast-top-right', 'toast-top-right');
            $("#username").focus();
            $("#username").click();
            return false;
        }

        if ($.trim($("#password").val()).length == 0) {
            global.myToast(4, "Error", "Por favor ingrese su contraseña", 'toast-top-right', 'toast-top-right');
            $("#password").focus();
            $("#password").click();
            return false;
        }
        return true;
    }
};
$(document).ready(function () {
    pageJs.Init();
    $("#send").on("click", function () {
        if (pageJs.validateLoginForm()) {
            pageJs.sendData();
        }
    });

    $("#password").keypress(function (e) {
        if (e.which == 13) {
            if (pageJs.validateLoginForm()) {
                pageJs.sendData();
            }
        }
    });
});

