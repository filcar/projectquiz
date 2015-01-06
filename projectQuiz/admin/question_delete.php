<?php
require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role(1);
	
$id=$_GET["id"];
	
mysql_query("DELETE FROM questions WHERE ID='".$id."'");

header("Location: questions.php");
?>