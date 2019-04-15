<?php

session_start();
define("PAGE_ID", 1);

 ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
require_once 'model/mdl_home.php';
$container = include('../global/settings.php');
$accion = new mdl_home();
require_once '../global/session/session.php';
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
            $result["url"] = '../inicio/';
        }else{
            $result["error"] = true;
            $result["message"] = '¡Ha ocurrido un error al cerrar sesion.!.';
        }

        echo json_encode($result);

        break;


    case 2:

        /* CARGO LOS KPI */
        $fechaInicio = (isset($_POST["fechaInicio"]) && isset($_POST["fechaInicio"]) != '') ? $_POST["fechaInicio"] : NULL;
        $fechaFin = (isset($_POST["fechaFin"]) && isset($_POST["fechaFin"]) != '') ? $_POST["fechaFin"] : NULL;
        $cantRegistros = (isset($_POST["cantRegistros"]) && isset($_POST["cantRegistros"]) != '') ? $_POST["cantRegistros"] : NULL;
        $result = [];

        if(!is_null($fechaInicio) && !is_null($fechaFin) && !is_null($cantRegistros) ){
            $headers = array('pToken:'.$_SESSION['token'], 'Content-Type:application/json');

            $params = [
                "fechaInicio" => $fechaInicio,
                "fechaFin" => $fechaFin,
                "cantRegistros"=> $cantRegistros
            ];


            $res = $accion->servicio($container["APIs"]["fac-elec"]["kpi-home"],
                $headers, $params, 'POST');
            if($res["status"] == "SUCCESS"){
                $result["articulosMasFac"] = $res["articulosMasFac"];
                $result["clientesMasFac"] = $res["clientesMasFac"];
                $result["resumen"] = $res["resumen"];
                $result["error"] = false;
                $result["mensaje"] = $res["mensaje"];

            }else{
                $result["error"] = true;
                $result["mensaje"] = $res["mensaje"];
            }

        }else{
            $result["error"] = true;
            $result["mensaje"] = 'Actualmente el servicio no esta disponible.';
        }

        echo json_encode($result);

        break;


    default:


    
        require_once '../_connect/mvc/SmartySingleton.php';
        $smarty = SmartySingleton::instance('home');
        

        


     

   
        $smarty->display('home.tpl');


}

