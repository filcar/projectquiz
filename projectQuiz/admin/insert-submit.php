<?php


$cat=$_POST["cat"];
$descr=$_POST["descr"];

require_once("../includes/connection.php");


mysql_query("INSERT INTO subjects (cat, descr) VALUES ('$cat', '$descr')");
/* mysql_close($link); */
	
header("location: index.php");

?>