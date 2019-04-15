<?php

if (isset($_GET["detail"])) {
    require_once "control/ctrl_detail.php";
} else {
    require_once "control/ctrl_listing.php";
}



