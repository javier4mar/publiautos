var global = {
    DB : false,
    Init : function () {

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
    isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    },
    soundGood : function(){
        var self = this;
        var audio = new Audio('../resources/sounds/bipgood.mp3');
        audio.play();
    },
    soundBad: function(){
        var self = this;
        var audio = new Audio('../resources/sounds/bipbad.mp3');
        audio.play();  
    },
    soundWarning:function(){
         var audio = new Audio('../resources/sounds/smallbox.mp3');
                audio.play();
    },
    logOutProcess : function (){
        //var sefl = this;
        var response = this.Ajax("POST", {"action" : 1 }, "../global/global.php", "json", true);
        response.then(function (data) {
            var data = JSON.parse(data);
            if(data.error){
                alert(data.message);
            }else{
                window.location.href = data.url;
            }
        }).catch(function (error) {
            console.log(error);
        });
    },
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
    loadingBlock :function(msg){
          $.blockUI({
            message: "<div class='resize'><center><img src='../resources/app-assets/images/loading.gif' ><br><h4>"+msg+"</h4></center></div>",
            overlayCSS: {
                backgroundColor: '#FFF',
                opacity: 0.8,
                cursor: 'wait'
            },
            css: {
                border: 0,
                padding: 0,
                color: '#333',
                backgroundColor: 'transparent'
            },
            onBlock: function() {
            }
        });
    },
    dismissLoadingBlock : function(){
        $.unblockUI();
    }
};

$(document).ready(function(){
    'use strict';
    global.Init();
    $("#select2-ajax").on("change", function () {
        global.logEmpresa();
    });

    $("#grpSeguridad").on("change", function () {
        global.changeGrp();
    });
    $("#logOutPr").on("click", function () {
        var pro = swal({
            title: '¿Desea salir del sistema?',
            text: "Esta a punto de cerrar su sesion, ¿desea continuar?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: ' Cancelar! ',
            confirmButtonText: '¡Si, salir!'
        }, function(res){
            if(res){
                global.logOutProcess();
            }
            console.log(res);
        });
    });
});
