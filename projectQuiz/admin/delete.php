<?php
	
	require_once("connection.php");
	
	$id=$_GET['id'];
	
	mysql_query("DELETE FROM subjects WHERE ID=$id");

	header("location: index.php");
	
?>