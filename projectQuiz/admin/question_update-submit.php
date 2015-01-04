<?php

require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role(1);

$question=$_POST["question"];
$ans1=$_POST["ans1"];
$ans2=$_POST["ans2"];
$ans3=$_POST["ans3"];
$ans4=$_POST["ans4"];
$ans5=$_POST["ans5"];
$corans=$_POST["corans"];
$id=$_POST["updatequestion"];

if($question!=NULL && $ans1!=NULL && $ans2!=NULL && $ans3!=NULL && $ans4!=NULL && $ans5!=NULL && $corans!=NULL){
    mysql_query("UPDATE questions SET question='".$question."', ans1='".$ans1."', ans2='".$ans2."', ans3='".$ans3."', ans4='".$ans4."', ans5='".$ans5."', corans='".$corans."' WHERE ID='".$id."'");
    header("Location: questions.php?message=successupdate");
}
	
else header("Location: questions.php?message=incomplete");
	
?>