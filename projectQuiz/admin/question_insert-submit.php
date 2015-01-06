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
$epilogi=$_SESSION["epilogi"];

if($question!=NULL && $ans1!=NULL && $ans2!=NULL && $ans3!=NULL && $ans4!=NULL
                                              && $ans5!=NULL && $corans!=NULL){
    mysql_query("INSERT INTO questions (question, ans1, ans2, ans3, ans4, ans5,
            corans, subject_ID) VALUES ('$question', '$ans1', '$ans2', '$ans3',
                                    '$ans4', '$ans5', '$corans', '$epilogi')");
    header("Location: questions.php?message=successinsert");
}
else header("Location: questions.php?message=incomplete");
?>