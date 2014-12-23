<?php

$cat=$_POST["cat"];
$descr=$_POST["descr"];
$id=$_POST["updatecat"];

require_once("../includes/connection.php");

mysql_query("UPDATE subjects SET cat='$cat', descr='$descr' WHERE ID='$id'");
/* mysql_close($link1); */
	
header("location: index.php");
	
?>