<?php

session_start();
$container = include_once '../global/settings.php';

$action = isset($_POST["action"]) ? $_POST["action"] : null;
unset($_POST['action']);

switch ($action) {

    case 1:

        require '../_connect/database/PDOConnection.php';

        $pdo = PDOConnection::instance();
        $db = $pdo->getConnection();

        require_once 'model/mdl_signup.php';
        $accion = new mdl_signup($db);

        parse_str($_POST["form"], $form);
        $response = [];
        $idRol = "3";

        $result = $accion->addUser(strtoupper($form["name"]), strtoupper($form["lastname"]), $form["email"], $form["password"], "web", $idRol, $_SERVER['REMOTE_ADDR']);

        if ($result["vStatus"] == "SUCCESS") {

            $_SESSION["login"] = strtoupper($form["name"]);
            $_SESSION["name"] = strtoupper($form["name"]);
            $_SESSION["lastname"] = strtoupper($form["lastname"]);
            $_SESSION["email"] = $form["email"];
            $_SESSION["idUser"] = $result["vCode"];
            $_SESSION["idRol"] = "3";

            $response["error"] = false;
            $response["message"] = $result["vMsg"];
        } else {
            $response["error"] = true;
            $response["message"] = $result["vMsg"];
        }

        echo json_encode($response);

        break;

    default:

        require_once '../_connect/mvc/SmartySingleton.php';

        $smarty = SmartySingleton::instance('signup');
        $smarty->assign('title', $container['appName'] . " | " . "Registro");
        $smarty->assign('slideHeaderBanner', $container['slideHeaderBanner']);
        $smarty->assign('appName', $container['appName']);
        $smarty->assign('appDescription', $container['appDescription']);
        $smarty->assign('keywords', $container['keywords']);
        $smarty->assign('versionJs', $container['versionJs']);
        $smarty->assign('address', $container['address']);
        $smarty->assign('phone', $container['phone']);
        $smarty->assign('email', $container['email']);
        $smarty->assign('ano', $container['ano']);

        $footer = $smarty->fetch('../global/view/footer.tpl');
        $smarty->assign('footer', $footer);

        $header = $smarty->fetch('../global/view/headerMenu.tpl');
        $smarty->assign('header', $header);
        
        $mobile = $smarty->fetch('../global/view/footerMobileMenu.tpl');
        $smarty->assign('mobileMenu', $mobile);
        
        $smarty->display('signup.tpl');

        exit;
}

