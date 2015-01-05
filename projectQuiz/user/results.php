<?php

require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role("0");

$ids=$_SESSION["ids"];
$quest=$_SESSION["quest"];
$correct=$_SESSION["correct"];
$username=$_SESSION["username"];
$fullname=$_SESSION["fullname"];

if(!isset($_SESSION["epilogi"])) header("Location: index.php");
$epilogi=$_SESSION["epilogi"];


echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns='http://www.w3.org/1999/xhtml'>
    <head>
        <meta charset='utf-8' />

    </head>
    <body>";
$sum=0;
      for($j=1;($j<$_SESSION["i"]+1);$j++){
        echo $j.")";
        $q="q".$j;

        if(!isset($_POST[$q])) {
            $msg=" Δεν συμπληρώθηκε!";
            echo $msg;
            echo "<hr />";
        }
        else {
        $ans=$_POST[$q];
       //////////////////// 
        mysql_query("SET NAMES utf8");
        $query = ("SELECT ".$ans." FROM questions WHERE ID='".$ids[$j]."'");
        $result = mysql_query($query) or die(mysql_error());
        $row=mysql_fetch_array($result);
       // echo $row[0].".............";
        echo "Η ερώτηση ήταν: ".$quest[$j]."<br />";
        echo "Η απάντηση που δώσατε ήταν: ".$row[0]."<br />";
        /////////////       
        
       
            if (check_ans($ids[$j], $ans)) {
                $sum = $sum + 10;
                echo " Σωστή απάντηση !!! Εχετε 10 βαθμούς <br />";
				//echo "Η ερώτηση ήταν: ".$quest[$j]."<br />";
				echo "<hr />";
            }
           else 
		   {echo " Λάθος απάντηση !!! <br />";
		        
				//echo "Η απάντηση που δώσατε ήταν: ".$given[$j]."<br />";
				echo "Η σωστή απάντηση είναι: ".$correct[$j]."<br />";;
				echo "<hr />";
		   }
        }echo "<br/>";
        
      }
      $score=$sum*10/$_SESSION["i"];
      
      echo "<br /> Αποτέλεσμα: ".$score."%";
echo "</body>
</html>
";
if($score>0 && isset($epilogi)){
$datetime=date("d/m/yy");
mysql_query("INSERT INTO scores (user_name, fullname, subject_ID, score, playdate) VALUES ('$username', '$fullname', '$epilogi', '$score', '$datetime')");
$score=0;
unset($_SESSION["epilogi"]);

}
?>