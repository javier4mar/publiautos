<?php

/**
 * Created by PhpStorm.
 * User: chanto
 * Date: 29/11/17
 * Time: 01:23 PM
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

define("PAGE_ID", 19);
require_once '../global/session/session.php';
$action = isset($_POST["action"]) ? $_POST["action"] : null;

unset($_POST['action']);


switch ($action) {

    case 1:

        /*CARGO EL DATATABLE CON LA LISTA DE UNIDADES DE HACIENDA POR MEDIO DEL SERVICIO*/
        require_once 'model/mdl_catalogo.php';
        $container = include('../global/settings.php');
        $accion = new mdl_catalogo();
        $result = [];
        $headers = array('pToken:'.$_SESSION['token']);
        $result = $accion->servicio($container["APIs"]["fac-elec"]["lista-mone-url"],
            $headers, null, 'GET');
        if($result["status"] == 'SUCCESS'){
            $result["data"] =  $result["monedas"];
            $result["error"] = false;
            $result["message"] = '';

        }else{
            $result["data"] =  [];
            $result["error"] = true;
            $result["message"] = 'Actualmente el servicio no esta disponible.';
        }

        echo json_encode($result);

        break;


    default:

        require_once '../_connect/mvc/SmartySingleton.php';
        $smarty = SmartySingleton::instance('global');
        $smarty->assign('title', '404');
        $smarty->assign('app_name', $container["app-Name"]);
        $smarty->assign('app_year', $container['app-year']);
        $smarty->assign('url_home', '/home');
        $smarty->assign('company_url',$container['company-url']);
        $smarty->assign('company_name',$container['company-name']);
        //$smarty->assign('company_text',$container['company-text']);
        $smarty->assign('company_slogan',$container['company-slogan']);

        //$smarty->clearCache('home.tpl');
        //$smarty->clearCache('../global/tpl/sideBarMenu.tpl');
        $smarty->display('404.tpl');


}
