<?php

session_start();

$container = include_once '../global/settings.php';
include_once '../global/session/session.php';

$action = isset($_POST["action"]) ? $_POST["action"] : null;
unset($_POST['action']);

switch ($action) {

    case 1:

        require '../_connect/database/PDOConnection.php';

        $pdo = PDOConnection::instance();
        $db = $pdo->getConnection();

        require_once 'model/mdl_login.php';
        $accion = new mdl_login($db);

        parse_str($_POST["form"], $form);
        $response = [];

        $result = $accion->loginUser($form["username"], $form["password"], $_SERVER['REMOTE_ADDR']);

        if ($result != null) {
            if ($result["vStatus"] == "SUCCESS") {

                if ($result["vStatusUser"] == "1") {
                    $_SESSION["login"] = true;
                    $_SESSION["name"] = $result["vFirstName"];
                    $_SESSION["lastname"] = $result["vLastName"];
                    $_SESSION["email"] = $result["vEmail"];
                    $_SESSION["idUser"] = $result["vIdUser"];
                    $_SESSION["idRol"] = $result["vIdRol"];


                    $response["url"] = "../global/checkRol.php";

                    $response["error"] = false;
                    $response["message"] = $result["vMsg"];
                } else {
                    $response["error"] = true;
                    $response["message"] = "Lo sentimos el usuario se encuentra desactivado";
                }
            } else {
                $response["error"] = true;
                $response["message"] = $result["vMsg"];
            }
        } else {
            $response["error"] = true;
            $response["message"] = "El usuario o contraseña es incorrecto";
        }

        echo json_encode($response);

        break;

    default:

        require_once '../_connect/mvc/SmartySingleton.php';

        $smarty = SmartySingleton::instance('login');
        $smarty->assign('title', $container['appName'] . " | " . "Ingresar");
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

        $smarty->display('login.tpl');

        exit;
}

