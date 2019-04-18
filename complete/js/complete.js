var uploadCrop;
var resize;
var pageJs = {
    Init: function () {
        $('#mappicker').locationpicker({
            location: {
                latitude: 9.9357221268645,
                longitude: -84.10354968994928
            },
            radius: 0,
            inputBinding: {
                latitudeInput: $('#latitude'),
                longitudeInput: $('#longitude')
            },
            markerInCenter: true
        });

        swal("Bienvenido a PubliAutosCR", "Antes de continuar necesitamos unos ultimos datos", "success");
        $(".select2").select2();
        $(".commercial").hide();

    }, profileSelected: function () {
        if ($("#profile").val() == 4 || $("#profile").val() == "") {
            $(".commercial").hide("slow");
        } else {
            $(".commercial").show("slow");
        }
    }, completeData: function () {
        hh = this;
        if (resize != null) {
            resize.result('base64').then(function (dataImg) {
                uploadCrop = [{image: dataImg}, {name: 'myimgage.jpg'}];
                hh.sendData(uploadCrop);
            });
        } else {
            hh.sendData("");
        }
    }, sendData: function (uploadCrop) {
        global.loadingBlock("Procesando.., Por favor espere");
        var response = global.Ajax("POST", {"action": 1, "form": $("#form-complete-profile").serialize(), "upload": uploadCrop}, "index.php", "json", true);
        response.then(function (data) {
            console.log(data);
            var data = JSON.parse(data);
            if (data.error) {
                global.myToast(4, "Error", data.message, 'toast-top-right', 'toast-top-right');
            } else {
                global.myToast(1, "Exito", data.message, 'toast-top-right', 'toast-top-right');
                window.location.href = "../dashboard/";
            }
            global.dismissLoadingBlock();
        }).catch(function (error) {
            console.log(error);
            global.dismissLoadingBlock();
        });
    }, readURL: function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#my-image').attr('src', e.target.result);
                resize = new Croppie($('#my-image')[0], {
                    viewport: {width: 250, height: 250, type: 'square'},
                    boundary: {width: 300, height: 300},
                    showZoomer: true,
                    enableResize: true,
                    enableOrientation: true
                });

            };
            reader.readAsDataURL(input.files[0]);
        }
    },
    validateCompleteForm: function () {

        if ($("#profile").val() == "") {
            global.myToast(4, "Error", "Por favor seleccione un perfil", 'toast-top-right', 'toast-top-right');
            $("#profile").focus();
            $("#profile").click();
            return false;
        }

        if ($("#profile").val() == 4) {
            // Regular Customer

            if ($("#iden").val() == "") {
                global.myToast(4, "Error", "Por favor seleccione un tipo de identificacion", 'toast-top-right', 'toast-top-right');
                $("#iden").focus();
                $("#iden").click();
                return false;
            }

            if ($.trim($("#numIdem").val()).length == 0) {
                global.myToast(4, "Error", "Por favor complete el numero de identificacion", 'toast-top-right', 'toast-top-right');
                $("#numIdem").focus();
                $("#numIdem").click();
                return false;
            }

            if ($.trim($("#phone").val()).length == 0) {
                global.myToast(4, "Error", "Por favor complete el telefono", 'toast-top-right', 'toast-top-right');
                $("#phone").focus();
                $("#phone").click();
                return false;
            }

        } else {
            // Commercial Customer

            if ($.trim($("#nameCommercial").val()).length == 0) {
                global.myToast(4, "Error", "Por favor complete el nombre comercial", 'toast-top-right', 'toast-top-right');
                $("#nameCommercial").focus();
                $("#nameCommercial").click();
                return false;
            }

            if ($("#iden").val() == "") {
                global.myToast(4, "Error", "Por favor seleccione un tipo de identificacion", 'toast-top-right', 'toast-top-right');
                $("#iden").focus();
                $("#iden").click();
                return false;
            }

            if ($.trim($("#numIdem").val()).length == 0) {
                global.myToast(4, "Error", "Por favor complete el numero de identificacion", 'toast-top-right', 'toast-top-right');
                $("#numIdem").focus();
                $("#numIdem").click();
                return false;
            }





            if ($.trim($("#phone").val()).length == 0) {
                global.myToast(4, "Error", "Por favor complete el telefono", 'toast-top-right', 'toast-top-right');
                $("#phone").focus();
                $("#phone").click();
                return false;
            }



            if ($.trim($("#address").val()).length == 0) {
                global.myToast(4, "Error", "Por favor complete la direccion en señas", 'toast-top-right', 'toast-top-right');
                $("#address").focus();
                $("#address").click();
                return false;
            }


            if ($.trim($("#longitude").val()).length == 0) {
                global.myToast(4, "Error", "Por favor complete la ubicacion", 'toast-top-right', 'toast-top-right');
                $("#longitude").focus();
                $("#longitude").click();
                return false;
            }

            if ($.trim($("#latitude").val()).length == 0) {
                global.myToast(4, "Error", "Por favor complete la ubicacion", 'toast-top-right', 'toast-top-right');
                $("#latitude").focus();
                $("#latitude").click();
                return false;
            }


        }


        return true;
    }
};
$(document).ready(function () {
    pageJs.Init();
    $("#send").on("click", function () {
        if (pageJs.validateCompleteForm()) {
            pageJs.completeData();
        }
    });


    $("#profile").change(function () {
        pageJs.profileSelected();
    });

    $("#imgInp").change(function () {
        pageJs.readURL(this);
    });

});

