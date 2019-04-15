<?php

if (isset($_GET["complete"])) {
    require_once "control/ctrl_complete.php";
} else if(isset ($_GET["forget"])){
    require_once "control/ctrl_forget.php";
}else{
    require_once "control/ctrl_login.php";
}



