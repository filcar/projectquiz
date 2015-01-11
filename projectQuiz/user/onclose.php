<?php
require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role(0);

    $username=$_SESSION["username"];
    $scale="Αποτυχία";
    $epilogi=$_SESSION["epilogi"];
    $score=0;
    $datetime=date("Y-d-m H:i:s");
    
    mysql_query("INSERT INTO scores (user_name, scale, subject_ID, score,
                    playdate) VALUES ('$username', '$scale', '$epilogi',
                                                '$score', '$datetime')");
    
 header( "Location: ../index.php" );
?>