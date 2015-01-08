<?php
require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role(1);

$cat=$_POST["cat"];
$descr=$_POST["descr"];

if($cat!=NULL && $descr!=NULL){
    mysql_query("INSERT INTO subjects (subject_name, description)
                                                    VALUES ('$cat', '$descr')");
    header("Location: categories.php?message=successinsert");
}
else header("Location: categories.php?message=incomplete");
?>