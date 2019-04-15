<?php
/**
 * Created by PhpStorm.
 * User: chanto
 * Date: 29/11/17
 * Time: 01:23 PM
 */


//
$action = isset($_POST["action"]) ? $_POST["action"] : null;

unset($_POST['action']);


switch ($action) {

    case 1:

        
        break;

    default:

        session_start();
       
            /*MUESTRO LA PAGINA*/

            $container = include('../global/settings.php');
            require_once '../_connect/mvc/SmartySingleton.php';
            $smarty = SmartySingleton::instance('listing');
            $smarty->assign('title',$container['app-Name'] ." | ". "Ingresar");
            $smarty->assign('app_name',$container['app-name']);
            $smarty->assign('app_image',$container['app-image']);

            $smarty->assign('app_year', $container['app-year']);
            $smarty->assign('company_url',$container['company-url']);
            $smarty->assign('company_name',$container['company-name']);
            $smarty->assign('company_text',$container['company-text']);
            $smarty->assign('company_slogan',$container['company-slogan']);

            $footer = $smarty->fetch('../global/view/footer.tpl');
            $smarty->assign('footer',$footer);
            $smarty->display('listing.tpl');

        exit;

}

