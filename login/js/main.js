var log = {
    myToast: function(type, title, body, positionClass, containerId){
        switch(type) {
            //INFO
            case 1:
                toastr.info(body, title, {positionClass: positionClass, containerId: containerId});
                break;
            //SUCCESS
            case 2:
                toastr.success(body, title, {positionClass: positionClass, containerId: containerId});

                break;
            //WARNING
            case 3:
                toastr.warning(body, title, {positionClass: positionClass, containerId: containerId});

                break;
            //ERROR
            case 4:
                toastr.error(body, title, {positionClass: positionClass, containerId: containerId});

                break;
            default:
                toastr.info(body, title, {positionClass: positionClass, containerId: containerId});
                break;
        }

    },
    Init : function () {
        var self = this;
        if($("form.form-horizontal").attr("novalidate") != undefined){


            $("input,select,textarea")
                .not("[type=submit]")
                    .jqBootstrapValidation({
                        preventSubmit: true,
                        submitSuccess: function ($form, event) {

                            console.log("success");
                            self.logProcess();
                            event.preventDefault();

                        },
                        submitError: function ($form, event, errors) {

                            console.log("error");
                            self.myToast(3, "Información Incompleta", "Complete la información que se le solicita.", 'toast-top-right', 'toast-top-right')

                        },
                        filter: function () {
                            return $(this).is(":visible");
                        }
                        

                        }
                );
        }

        // Remember checkbox
        if($('.chk-remember').length){
            $('.chk-remember').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue'
            });
        }
    },
    Ajax : function (Method, Parameters, File, CallBackType, Async){
        return new Promise(function (resolve, reject) {
            $.ajax({
                    method: Method,
                    url: File,
                    async: Async,
                    data: Parameters,
                    type: CallBackType
                }
            ).done(resolve).fail(reject);
        });
    },
    logProcess : function (){
        var self = this;
        var check;
        if($("#remember-me").is(':checked')){
            check = true;
        }else{
            check = false;
        }

        var response = this.Ajax("POST", {"action" : 1,
                                    "user-name" : $("#user-name").val(),
                                    "user-password" : $("#user-password").val(),
                                    "remember-me" : check
        }, "index.php", "json", true);

        response.then(function (data) {
            // console.log(data);

            var data = JSON.parse(data);
            if(data.error){

                $("#user-name").val("");
                $("#user-password").val("");
                $("#user-name").focus();

                self.myToast(4, "Autenticación Error", data.message, 'toast-top-right', 'toast-top-right')
               // alert(data.message);
            }else{
                self.myToast(2, "Autenticación Correcta", data.message, 'toast-top-right', 'toast-top-right')
                window.location.href = data.url;

            }

        }).catch(function (error) {
            console.log(error);
        });
    }

};


$(document).ready(function(){
    'use strict';
    log.Init();
    //$("#logIn").on("click", log.logProcess);

});



