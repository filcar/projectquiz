<?php
require_once("connection.php");
include_once "functions.php";
session_start();

$msg="";
$fullname=$_POST["fullname_ins"];
$username=$_POST["username_ins"];
$password=$_POST["password_ins"];

if (user_exist($username)) {
    $msg = "Το username χρησιμοποιείται ήδη ";}

if ($username == null || $password == null || $fullname == null) {
    $msg = "Ελλειπή στοιχεία καταχώρησης! ";}

if ($msg == "") {
    mysql_query("INSERT INTO user(username,password,role,fullname) VALUES
             ('$username', '$password',0,'$fullname')");
    $msg = "Επιτυχής καταχώρηση.
            Επιστρέψτε στην σελίδα εισαγωγής των κωδικών για να συνδεθείτε";}

$_SESSION["msg"] = $msg;

header("Location: ../register.php");
?>