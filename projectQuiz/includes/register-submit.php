<?php
session_start();
require_once("connection.php");
include_once "functions.php";
$msg="";
$fullname=$_POST["fullname"];
$username=$_POST["username"];
$password=$_POST["password"];
if (user_exist($username)) {
    $msg = "Το username χρησιμοποιείται ήδη ";
}
if ($username == null || $password == null || $fullname == null) {
    $msg .= "Ελλειπή στοιχεία καταχώρησης! ";
}

if ($msg === "") {
    mysql_query("INSERT INTO user(username,password,role,fullname) VALUES ('" . $username . "', '" . $password . "',0,'" . $fullname . "')");
    $msg="Επιτυχής καταχώρηση. Επιστρέψτε στην σελίδα εισαγωγής των κωδικών για να συνδεθείτε";
} 
$_SESSION["msg"] = $msg;

header("Location: ../register.php");

?>