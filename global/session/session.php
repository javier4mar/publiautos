<?php

/*
* Control de acceso Nivel Activacion
*/

function ordenarSecuencia($array){
    for($i=1;$i<count($array);$i++){
        for($j=0;$j<count($array)-$i;$j++){
                if($array[$j]["secuencia"]>$array[$j+1]["secuencia"])
                {$k=$array[$j+1]; $array[$j+1]=$array[$j]; $array[$j]=$k;}
        }
    }   
   return  $array;
}

$container = include('../global/settings.php');


    
if($container["debug"]){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

//if (!isset($_SESSION["token"])) {
//    session_destroy();
//    header("Location: ../inicio");
//    die;
//
//}else {
//
//
//    if ((isset($_SESSION["mantenerLogin"]))) {
//        $inactivo = 432000;
//    }
//    else {
//        $inactivo = 432000; // 12 Hora de session
//    }
//
//    if (isset($_SESSION['tiempo'])) {
//        $vida_session = time() - $_SESSION['tiempo'];
//        if ($vida_session > $inactivo) {
//            session_destroy();
//            header("Location: ../inicio");
//            die;
//        }
//    }
//
//    $_SESSION['tiempo'] = time();
//
//    $timeZone = 'America/Costa_Rica';  // GMT-6
//    date_default_timezone_set($timeZone);
//
//    /*  ESTA PARTE CARGA LOS DATOS DEL MENU LATERAL, EN DONDE SE REVISA
//        SI YA SE LLAMO EL SERVICIO DEL MENU PARA GUARDARLO EN SESSION ,
//        SI EL SERVICIO NO ESTA DISPONIBLE SE ELIMINA LA SESSION */
//
//    if(isset($_SESSION['defaultIDGroup'])){
//
//        if(!isset($_SESSION['dataMenu']) || is_null($_SESSION['dataMenu']) ) {
//            $container = include('../global/settings.php');
//
//            require '../global/clasess/Guzzle.php';
//            $httpCli = new Guzzle();
//
//            $headers = [ "pToken" => $_SESSION["token"] ];
//            $res = $httpCli->send("GET",
//                $container["APIs"]["fac-elec"]["menu-url"].$_SESSION["defaultIDGroup"],
//                $headers);
//            if($res->getStatusCode() == 200){
//                $arrayFilter = array();
//                $menus =  json_decode($res->getBody(), true);
//                $menu = $menus["opciones"] ;
//
//                $pMenu= array();
//                $pMenuFinal= array();
//                foreach ( $menu as $key => $row){
//                    if($row["idPadre"] == 0){
//                       array_push($pMenu, $row);
//                       unset($menu[$key]); 
//                    }    
//                }
//               
//                if(count($pMenu)>0){
//                    $pMenu = ordenarSecuencia($pMenu);
//
//                    foreach ($pMenu as $key => $pRow) {
//                        array_push($pMenuFinal, $pRow);
//                        unset($pMenu[$key]);
//
//                        $idPnivel = $pRow["idPagina"];
//                        while(true){
//                            $nivel = array();
//                            foreach ($menu as $key => $subMenu){
//                                if($subMenu["idPadre"] == $idPnivel){
//                                    array_push($nivel, $subMenu);
//                                    unset($menu[$key]); 
//                                }       
//                            }
//
//                            if(count($nivel)>0){
//                               $nivel = ordenarSecuencia($nivel);
//                               $pMenuFinal = array_merge($pMenuFinal,$nivel);
//                            }else{
//                               break;
//                            }
//                        }
//                                       
//                    }
//                }else{
//                    echo "FATAL ERROR: No se encontraron menus padre!";
//                    die;
//                }
//
//                $menuObjFinal=array();
//                foreach($pMenuFinal as $key => $menuObj){
//                   $menuObjFinal[$key] = (object) $menuObj;
//                }
//
//                $_SESSION['dataMenu'] = $menuObjFinal;
//               
//            }else{
//                session_destroy();
//                header("Location: ../login");
//                die;
//            }
//        }
//
//
//        /*CARGO LOS ACCESOS A LAS PAGINAS*/
//        if(!isset( $_SESSION['accessPages']) || is_null( $_SESSION['accessPages']) ) {
//            
//
//            $headers = array('pToken:'.$_SESSION["token"]);
//
//            $res = $accion->servicio( $container["APIs"]["fac-elec"]["paginas-url"].$_SESSION["defaultIDGroup"],
//                $headers, NULL, 'GET');
//
//            if($res["status"] == 'SUCCESS'){
//                $_SESSION['accessPages'] = $res["paginas"];
//
//            }else{
//                session_destroy();
//                header("Location: ../login");
//                die;
//            }
//
//        }
//    }else{
//        session_destroy();
//        header("Location: ../login");
//        die;
//    }
//
//    //REVISO QUE LA CONSTANTE DE LA PAGINA ESTA CREADA
//    if(defined('PAGE_ID')){
//
//        $var = PAGE_ID;
//
//        /*BUSCO EN EL ARRAY SI LA PAGINA QUE VISITO EXISTE EN EL ARRAY */
//        $found = array_filter($_SESSION["accessPages"], function($element) use($var){
//
//            return isset($element["idPagina"]) && $element["idPagina"]== $var;
//        });
//
//        if(count($found) == 0){
//            header("Location: ../global/accesoDenegado.php");
//            die;
//        }
//
//    }else{
//        session_destroy();
//        header("Location: ../login");
//        die;
//    }
//
//
//}