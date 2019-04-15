<?php

/**
 * Created by PhpStorm.
 * User: chanto
 * Date: 29/11/17
 * Time: 01:23 PM
 * ARCHIVO USADO PARA ALMACENAR FUNCIONES GLOBALES DE BACKEND
 */



session_start();
$action = isset($_POST["action"]) ? $_POST["action"] : null;

unset($_POST['action']);


switch ($action) {

    case 1:

        /*PROCESO DE LOGOUT DEL USUARIO A NIVEL SESSION PHP*/
        $result = array();
        session_destroy();

        if(!session_id()){
            $result["error"] = false;
            $result["message"] = 'Log out.';
            $result["url"] = '../login/';
        }else{
            $result["error"] = true;
            $result["message"] = '¡Ha ocurrido un error al cerrar sesion.!.';
            $result["url"] = '../login/';

        }

        echo json_encode($result);

        break;

    case 2:

        /*LOG CON LA EMPRESA QUE EL USUARIO DIGITO*/
        //print_r($_POST); die;
        $idEmp = (isset($_POST["idEmp"]) && isset($_POST["idEmp"]) != '') ? $_POST["idEmp"] : NULL;
        $nomEmp = (isset($_POST["nomEmp"]) && isset($_POST["nomEmp"]) != '') ? $_POST["nomEmp"] : NULL;
        $upEmp = (isset($_POST["upEmp"]) && isset($_POST["upEmp"]) != '') ? $_POST["upEmp"] : NULL;

        $result = [];

        if(!is_null($idEmp) &&  !is_null($nomEmp)){

            require_once 'model/mdl_global.php';
            $container = include('../global/settings.php');
            $accion = new mdl_global();

            $headers = array('pKey:'.$container['server-Key'], 'Content-Type:application/json',
                'pIdEmpresaFe:'.$idEmp, 'pActualizaEmp:'.$upEmp);

            $params  = array('usuario' => $_SESSION["user"], 'clave' =>  $_SESSION["pass"]);


            $res = $accion->servicio($container["APIs"]["fac-elec"]["login-url"],
                $headers, $params, 'POST');

            if(strcmp($res["status"], 'SUCCESS') == 0){

                $result["url"] = $_POST["currentURL"];
                $_SESSION["token"] = $res['token'];
                $_SESSION["defaultIDEmp"] = $idEmp;
                $_SESSION["defaultNameEmp"] = $nomEmp;

                //ACTUALIZO LOS GRUPOS DE LA EMPRESA
                $_SESSION["grupos"] = $res['grupos'];

                $grp_options = '';
                $i = 0;
                foreach ($_SESSION["grupos"] as $grp){
                    if($i == 0){
                        $grp_options .= '<option value="'.$grp["idGrupo"].'" selected>'.$grp["nombre"].'</option>';
                    }else{
                        $grp_options .= '<option value="'.$grp["idGrupo"].'">'.$grp["nombre"].'</option>';

                    }
                    $i++;
                }

                //COMO CAMBIO DE EMPRESA DEBO REGISTRAR EL NUEVO DEFAULT GROUP ID
                // EL CUAL SIEMPRE ES EL PRIMERO

                $_SESSION["defaultIDGroup"] = $_SESSION["grupos"][0]["idGrupo"];
                $_SESSION["defaultNameGroup"] = $_SESSION["grupos"][0]["nombre"];

                // SETEO A NULL EL DATA MENU Y  ACCES_PAGES PARA QUE SE
                // RECARGUE EL MENU LATERAL Y EL ACCESO A LAS PAGINAS EN EL ARCHVIO DE PHP SESSION
                $_SESSION['accessPages'] = NULL;
                $_SESSION['dataMenu'] = NULL;

                $headers2 = array('pKey:'.$container['server-Key'], 'Content-Type:application/json',
                    'pIdEmpresaFe:'.$idEmp, 'pIdGrupo:'.$_SESSION['defaultIDGroup']);

                $params2  = array('usuario' => $_SESSION["user"], 'clave' =>  $_SESSION["pass"]);
                $res2 = $accion->servicio($container["APIs"]["fac-elec"]["login-url"],
                    $headers2, $params2, 'POST');

                $result["grpOption"] = $grp_options;
                $result["error"] = false;
                $result["message"] = 'Se cambio la empresa correctamente';

            }else{
                $result["data"] =  [];
                $result["error"] = true;
                $result["message"] = 'Actualmente el servicio no esta disponible.';
            }
        }else{
            $result["error"] = true;
            $result["message"] = 'Ha ocurrido al cambiar la empresa, por favor vuelva a intentarlo.';
        }

        echo json_encode($result);


        break;

    case 3:

        /*CAMBIO EL GRUPO DE SEGURIDAD DE LA EMPRESA EN LA CUAL ESTOY LOGEADO*/
        //$idEmp = (isset($_POST["idEmp"]) && isset($_POST["idEmp"]) != '') ? $_POST["idEmp"] : NULL;
        //$nomEmp = (isset($_POST["nomEmp"]) && isset($_POST["nomEmp"]) != '') ? $_POST["nomEmp"] : NULL;
        $idGrp  = (isset($_POST["idGrp"]) && isset($_POST["idGrp"]) != '') ? $_POST["idGrp"] : NULL;
        $nomGrp = (isset($_POST["nomGrp"]) && isset($_POST["nomGrp"]) != '') ? $_POST["nomGrp"] : NULL;
        $result = [];

        if(!is_null($idGrp) &&  !is_null($idGrp)){

                //MANTENGO LA MISMA EMPRESA PERO CAMBIO EL GRUPO DE
                // SEGURIDAD AL ACTUALIZAR EL GRUPO POR DEFECTO
                $_SESSION["defaultIDGroup"] = $idGrp;
                $_SESSION["defaultNameGroup"] = $nomGrp;

                // SETEO A NULL EL DATA MENU Y  ACCES_PAGES PARA QUE SE
                // RECARGUE EL MENU LATERAL Y EL ACCESO A LAS PAGINAS EN EL ARCHVIO DE PHP SESSION
                $_SESSION['accessPages'] = NULL;
                $_SESSION['dataMenu'] = NULL;

                $result["error"] = false;
                $result["message"] = 'Se cambio el grupo de seguridad correctamente.';

        }else{
            $result["error"] = true;
            $result["message"] = 'Ha ocurrido al cambiar el grupo, por favor vuelva a intentarlo.';
        }

        echo json_encode($result);

        break;

    case 4:

        /*NOTIFICACIONES*/
        $result = [];
        $result["countPush"]  = 0;
        $push   = '';
        date_default_timezone_set('America/Costa_Rica');
        $now = new DateTime();

        if($_SESSION["showNotification"]){

            $fechaVence = new DateTime( $_SESSION["fechaVencePago"]);
            $diff = $now->diff($fechaVence);
            $intervalo = intval($diff->format('%R%a'));
            if( $intervalo >= 0){ //negativo
                if($intervalo <= $_SESSION["diasAntesVence"]){
                    $push .= '<a href="javascript:void(0)" class="closeNotiPago" data-tipo="1">
                             <div class="media">
                                 <div class="media-left align-self-center"><i class="ft-calendar icon-bg-circle bg-cyan"></i></div>
                                 <div class="media-body">
                                     <h6 class="media-heading">Su plan esta a punto de vencer.</h6>
                                     <p class="notification-text font-small-3 text-muted">Le informamos que su plan vence el '.$fechaVence->format('d-m-Y').'</p>
                                     <small class="info"> Haga click aqui para silenciar esta notificación</small> 
                                 </div>
                             </div>
                         </a>';
                    $result["fechaVence"] = $fechaVence->format('Y-m-d');
                    $result["push"] = $push;
                    $result["show"] = true;
                    $result["countPush"] = 1;
                }
            }else{

                $push .= '<a href="javascript:void(0)" class="closeNotiPago" data-tipo="1">
                             <div class="media">
                                 <div class="media-left align-self-center"><i class="ft-calendar icon-bg-circle bg-cyan"></i></div>
                                 <div class="media-body">
                                     <h6 class="media-heading">Su plan ha vencido.</h6>
                                     <p class="notification-text font-small-3 text-muted">Le informamos que su plan vencio el '.$fechaVence->format('d-m-Y').', y tiene '.abs($diff->days).' días de atraso en su pago. Si desea extender su plan haga click <a href="../pagos/reportarPago.php">Aquí</a></p>
                                     <small  class="info"> Haga click aqui para silenciar esta notificación</small>
                                 </div>
                             </div>
                         </a>';
                $result["fechaVence"] = $fechaVence->format('Y-m-d');
                $result["push"] = $push;
                $result["show"] = true;
                $result["countPush"] += 1;
            }
        }

        if($_SESSION["showNotificationCertificado"] && !is_null($_SESSION["fechaVenceCert"])){
            $fechaVenceCert = new DateTime( $_SESSION["fechaVenceCert"]);
            $diff = $now->diff($fechaVenceCert);
            $intervalo = intval($diff->format('%R%a'));
            if( $intervalo >= 0){ //negativo
                if($intervalo <= $_SESSION["diasVenceCert"]){
                    $push .= '<a href="javascript:void(0)" class="closeNotiPago" data-tipo="2">
                             <div class="media">
                                 <div class="media-left align-self-center"><i class="ft-calendar icon-bg-circle bg-cyan"></i></div>
                                 <div class="media-body">
                                     <h6 class="media-heading">Su llave criptográfica de hacienda esta pronta a vencer.</h6>
                                     <p class="notification-text font-small-3 text-muted">
                                     Le informamos que vence el '.$fechaVenceCert->format('d-m-Y').'.
                                     Por favor actualice el certificado lo antes posible, en donde por medio del ATV de 
                                     hacienda puede generar una nueva llave, la cual puede ingresar a full factura haciendo click <a href="../configuracion/index.php">Aquí</a></p>
                                     <small class="info" data-tipo="1">Haga click aqui para silenciar esta notificación</small>
                                 </div>
                             </div>
                         </a>';

                    $result["echaVenceCert"] = $fechaVenceCert->format('Y-m-d');
                    $result["push"] = $push;
                    $result["show"] = true;
                    $result["countPush"] += 1;
                }

            }else{

                $push .= '<a href="javascript:void(0)" class="closeNotiPago" data-tipo="2"></a>
                             <div class="media">
                                 <div class="media-left align-self-center"><i class="ft-calendar icon-bg-circle bg-cyan"></i></div>
                                 <div class="media-body">
                                     <h6 class="media-heading">Su llave criptográfica ha vencido.</h6>
                                     <p class="notification-text font-small-3 text-muted">Para actualizar la llave criptográfica por favor haga click <a href="../configuracion/index.php">Aquí</a>, la nueva llave criptográfica la puede generar en el ATV del ministerio de hacienda.</p>
                                     <small  class="info"> Haga click aqui para silenciar esta notificación</small>
                                 </div>
                             </div>
                         </a>';
                $result["fechaVence"] = $fechaVenceCert->format('Y-m-d');
                $result["push"] = $push;
                $result["show"] = true;
                $result["countPush"] += 1;
            }
        }
        if($result["countPush"] == 0){
            $result["show"] = false;
        }

        echo json_encode($result);
        break;

    case 5:
        $tipoNofificacion = (isset($_POST["tipoNofificacion"]) &&
            isset($_POST["tipoNofificacion"]) != '') ? $_POST["tipoNofificacion"] : NULL;

        if($tipoNofificacion == 1){
            $_SESSION["showNotification"] = false;
        }else{
            $_SESSION["showNotificationCertificado"] = false;
        }

        $result = [];
        $result["error"] = false;
        echo json_encode($result);
        break;
    default:




}

