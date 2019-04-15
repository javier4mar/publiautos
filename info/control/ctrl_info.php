<?php
session_start();

$action = isset($_POST["action"]) ? $_POST["action"] : $action;
unset($_POST['action']);

switch ($action) {

    case 1:

       
    break;

    default:

     
    $container = include('../global/settings.php');
    require_once '../_connect/mvc/SmartySingleton.php';

    
    
    
    
    $smarty = SmartySingleton::instance('info');
    $smarty->assign('title', $container['appName'] ." | ". $titleInfo);
    $smarty->assign('titleInfo', $titleInfo);

    $smarty->assign('slideHeaderBanner',$container['slideHeaderBanner']);
    $smarty->assign('appName',$container['appName']);
    $smarty->assign('appDescription',$container['appDescription']);
    $smarty->assign('keywords',$container['keywords']);
    $smarty->assign('versionJs',$container['versionJs']);
    $smarty->assign('address',$container['address']);
    $smarty->assign('phone',$container['phone']);
    $smarty->assign('email',$container['email']);
    $smarty->assign('ano',$container['ano']);

    $footer = $smarty->fetch('../global/view/footer.tpl');
    $smarty->assign('footer',$footer);
    
    $header = $smarty->fetch('../global/view/headerMenu.tpl');
    $smarty->assign('header',$header);
    
    $smarty->display('info.tpl');
    
    exit;
}

