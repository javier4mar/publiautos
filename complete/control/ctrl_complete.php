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

        require_once 'model/mdl_complete.php';
        $accion = new mdl_complete($db);

        parse_str($_POST["form"], $form);
        print_r($_POST["upload"]);

        $logoUrl = '';
        $response = [];
        if (is_array($_POST["upload"])) {
            $logoUrl = '../resources/images/page/logos/' . uniqid() . '.png';

            if (file_put_contents($logoUrl, base64_decode(explode(',', $_POST["upload"][0]["image"])[1])) !== false) {

                $response["error"] = true;
                $response["message"] = "Ocurrio un error cargando el logo por favor intente de nuevo!";

                echo json_encode($response);
                die;
            }
        }

        $result = $accion->addProfileUser($form["profile"], $form["iden"], $form["numIdem"], $form["nameCommercial"], $form["address"], $form["longitude"], $form["latitude"], $form["fb"], $form["instam"], $form["twitter"], $form["web"], $logoUrl);

        if ($result > 0) {
            $_SESSION["idProfile"] = $result;
            $response["error"] = false;
            $response["message"] = "Perfil creado correctamente";
        } else {
            $response["error"] = true;
            $response["message"] = "Ocurrio un proble creando tu perfil";
        }

        echo json_encode($response);

        break;

    default:
        require '../_connect/database/PDOConnection.php';

        $pdo = PDOConnection::instance();
        $db = $pdo->getConnection();

        require_once 'model/mdl_complete.php';
        $accion = new mdl_complete($db);

        $documents = $accion->getDocumentTypes();
        $spIden = "<option value=''>Seleccione un documento</option>";
        foreach ($documents as $row) {
            $spIden .= "<option value='" . $row["idDocumentType"] . "'>" . $row["name"] . "</option>";
        }

        $usersProfile = $accion->getListUserType();
        $spProfile = "<option value=''>Seleccione un opcion</option>";
        foreach ($usersProfile as $row) {
            $spProfile .= "<option value='" . $row["idSellerType"] . "'>" . $row["name"] . "</option>";
        }

        require_once '../_connect/mvc/SmartySingleton.php';
        $smarty = SmartySingleton::instance('complete');

        $smarty->assign('title', $container['appName'] . " | " . "Bienvenido");
        $smarty->assign('slideHeaderBanner', $container['slideHeaderBanner']);
        $smarty->assign('appName', $container['appName']);
        $smarty->assign('appDescription', $container['appDescription']);
        $smarty->assign('keywords', $container['keywords']);
        $smarty->assign('versionJs', $container['versionJs']);
        $smarty->assign('address', $container['address']);
        $smarty->assign('phone', $container['phone']);
        $smarty->assign('email', $container['email']);
        $smarty->assign('ano', $container['ano']);
        $smarty->assign('googleMapsKey', $container['googleMapsKey']);
        $smarty->assign('optionsProfile', $spProfile);
        $smarty->assign('optionsIden', $spIden);


        $footer = $smarty->fetch('../global/view/footer.tpl');
        $smarty->assign('footer', $footer);

        $header = $smarty->fetch('../global/view/headerMenu.tpl');
        $smarty->assign('header', $header);

        $smarty->display('complete.tpl');

        exit;
}

