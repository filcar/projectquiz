<?php

require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role(1);

$cat=$_POST["cat"];
$descr=$_POST["descr"];
$id=$_POST["updatecat"];

if($cat!=NULL && $descr!=NULL){
    mysql_query("UPDATE subjects SET subject_name='".$cat."', description='".$descr."' WHERE ID='".$id."'");
    header("Location: categories.php?message=successupdate");
}
	
else header("Location: categories.php?message=incomplete");
	
?>