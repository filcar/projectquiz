<?php
	
    require_once("../includes/connection.php");
	
    $id=$_GET["id"];
	
    mysql_query("DELETE FROM subjects WHERE ID='".$id."'");

    header("Location: categories.php");
	
?>