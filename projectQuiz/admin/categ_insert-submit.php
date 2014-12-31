<?php

require_once("../includes/connection.php");

$cat=$_POST["cat"];
$descr=$_POST["descr"];

if($cat!=NULL && $descr!=NULL){
    mysql_query("INSERT INTO subjects (subject_name, description) VALUES ('$cat', '$descr')");
    header("Location: categories.php?message=successinsert");
}
else header("Location: categories.php?message=incomplete");

?>