<?php

require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();

$ids=$_SESSION["ids"];

echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org
                                            /TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8' />
</head>

<body>";
    $sum=0;
    for($j=1;($j<$_SESSION["i"]+1);$j++){
        echo $j;
        $q="q".$j;
        if(!isset($_POST[$q])) {
            echo " Δεν συμπληρώθηκε!";
        }
        else {
            $ans=$_POST[$q];
            if (check_ans($ids[$j], $ans)) {
                $sum = $sum + 10;
                echo " Σωστή απάντηση !!! +10";
            }
            else echo " Λάθος απάντηση !!!";
        }echo "<br/>";
      }
      echo "sum: ".$sum;
echo"
</body>
</html>";

?>