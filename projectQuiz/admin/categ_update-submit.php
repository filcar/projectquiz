<?php

$cat=$_POST["subject_name"];
$descr=$_POST["description"];
$id=$_POST["updatecat"];

require_once("../includes/connection.php");

mysql_query("UPDATE subjects SET subject_name='$cat', description='$descr' WHERE ID='$id'");
	
header("location: categories.php");
	
?>