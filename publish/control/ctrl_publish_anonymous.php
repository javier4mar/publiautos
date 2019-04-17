<?php

session_start();

$container = include_once '../global/settings.php';
include_once '../global/session/session.php';

$action = isset($_POST["action"]) ? $_POST["action"] : null;

unset($_POST['action']);


switch ($action) {

    case 1:


        break;

    default:

        require_once '../_connect/mvc/SmartySingleton.php';

        $smarty = SmartySingleton::instance('dashboard');
        $smarty->assign('title', $container['appName'] . " | " . "Dashboard");
        $smarty->assign('slideHeaderBanner', $container['slideHeaderBanner']);
        $smarty->assign('appName', $container['appName']);
        $smarty->assign('appDescription', $container['appDescription']);
        $smarty->assign('keywords', $container['keywords']);
        $smarty->assign('versionJs', $container['versionJs']);
        $smarty->assign('address', $container['address']);
        $smarty->assign('phone', $container['phone']);
        $smarty->assign('email', $container['email']);
        $smarty->assign('ano', $container['ano']);
        
        $smarty->assign('name', $_SESSION["name"]." ".$_SESSION["lastname"]);

       
        $footer = $smarty->fetch('../global/view/footer.tpl');
        $smarty->assign('footer', $footer);

        $header = $smarty->fetch('../global/view/headerMenu.tpl');
        $smarty->assign('header', $header);
        
        $mobile = $smarty->fetch('../global/view/footerMobileMenu.tpl');
        $smarty->assign('mobileMenu', $mobile);


        $smarty->display('dashboard.tpl');

        exit;
}

