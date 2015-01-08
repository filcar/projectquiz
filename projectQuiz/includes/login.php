<?php
include_once "connection.php";
include_once "functions.php";

if(isset($_POST["username"], $_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $fullname = $_POST["fullname"];}

if(log_in($username, $password))
{
    if($_SESSION["role"]==1){
        header("Location: ../admin/index.php");}
    else {
        header("Location: ../user/index.php");}
}
else
{
    header("Location: ../index.php?error=1");
}
?>