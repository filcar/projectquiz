<?php
include_once "connection.php";
include_once "functions.php";
$username = $_POST["username"];
$password = $_POST["password"];

if(log_in($username, $password))
{
    if($_SESSION["role"]==1){
        header('Location: ../admin/index.php');
    }
    else {
        header('Location: ../user/index.php');
    }
} else {
    header('Location: ../index.php?error=1');
}
?>