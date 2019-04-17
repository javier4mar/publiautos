<?php

if (isset($_GET["car"])) {
    require_once "control/ctrl_publish.php";
} else if ($_GET["publish-car"]) {
    require_once "control/ctrl_publish_anonymous.php";
} else if ($_GET["auction"]) {
    require_once "control/ctrl_auction.php";
}

