<?php
session_start();

if ($_SESSION["idRol"] == "1") {
    header("location: ../admin/");
} elseif ($_SESSION["idRol"] == "2") {
    header("location: ../admin/");
} elseif ($_SESSION["idRol"] == "3") {
    header("location: ../dashboard/");
} elseif ($_SESSION["idRol"] == "4") {
    header("location: ../dashboard/");
}