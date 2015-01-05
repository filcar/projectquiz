<?php
require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role("0");
$ids=$_SESSION["ids"];
$quest=$_SESSION["quest"];
$correct=$_SESSION["correct"];
$given=$_SESSION["given"];

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
        }
        else {
            $ans=$_POST[$q];
			
            if (check_ans($ids[$j], $ans)) {
                $sum = $sum + 10;
                echo " Σωστή απάντηση !!! Εχετε 10 βαθμούς <br />";
				echo "Η ερώτηση ήταν: ".$quest[$j]."<br />";
				echo "Η απάντηση που δώσατε ήταν: ".$given[$j]."<br />";
				echo "<hr />";
            }
           else 
		   {echo " Λάθος απάντηση !!! <br />";
		        echo "Η ερώτηση ήταν: ".$quest[$j]."<br />";
				echo "Η απάντηση που δώσατε ήταν: ".$given[$j]."<br />";
				echo "Η σωστή απάντηση είναι: ".$correct[$j]."<br />";;
				echo "<hr />";
		   }
        }echo "<br/>";
        
      }
      echo "<br /> Αποτέλεσμα: ".$sum." βαθμοί";
echo "</body>
</html>
";

?>