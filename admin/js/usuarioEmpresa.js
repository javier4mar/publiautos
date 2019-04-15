var pageJs = {
    table : {},
    Init : function(){
        var self = this;
        if($("#formLog").attr("novalidate") != undefined){

            $("input, select, textarea").not("[type=submit]")
                .jqBootstrapValidation({
                        preventSubmit: true,
                        submitSuccess: function ($form, event) {
                            console.log("success");
                            self.logEmpresa();
                            event.preventDefault();
                        },
                        submitError: function ($form, event, errors) {
                            console.log("error");
                            global.myToast(3, "Información Incompleta", "Complete la información que se le solicita.", 'toast-top-right', 'toast-top-right');

                        },
                        filter: function () {
                            return $(this).is(":visible");
                        }
                    },


                );
        }

        $("#select2-ajax1").select2({
          //  containerCssClass: 'select-lg'
        });
    },
    logEmpresa: function(){
        var self = this;
        var response = global.Ajax("POST", {"action" : 1 , "idEmp": $("#select2-ajax1").val(), "nomEmp" : $("#select2-ajax1 option:selected").text()}, "usuarioEmpresa.php", "json", true);

        response.then(function (data) {
            console.log(data);
            var data = JSON.parse(data);
            if(data.error){
                global.myToast(4, "Error", data.message, 'toast-top-right', 'toast-top-right');
            }else{
                global.myToast(2, "Completado", data.message, 'toast-top-right', 'toast-top-right');
                window.location.href = data.url;
            }
        }).catch(function (error) {
            console.log(error);
        });
    }
}

$( document ).ready(function() {
    pageJs.Init();

    $("#outPro").on("click", function () {
        global.logOutProcess();
    });

});

