<?php

include("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role("0");

echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org
                                            /TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8' />
</head>

<body>
<h1>Απαντήστε στις παρακάτω ερωτήσεις</h1>";

$epilogi=$_POST["epilogi"];
$ids = array();
$all_rows=(mysql_query("SELECT * FROM questions WHERE subject_ID='".$epilogi."'"));
$i=0;
echo"<form method='post' action='results.php'>";
    while($row=mysql_fetch_array($all_rows))
    {$i++;
     echo "<u><b>".$i."η Ερώτηση: </u></b></br>";
     echo $row["question"]."</br>";
     echo "<input type='radio' name='q".$i."' value='ans1' />" .$row["ans1"]. "<br />";
     echo "<input type='radio' name='q".$i."' value='ans2' />" .$row["ans2"]. "<br />";
     echo "<input type='radio' name='q".$i."' value='ans3' />" .$row["ans3"]. "<br />";
     echo "<input type='radio' name='q".$i."' value='ans4' />" .$row["ans4"]. "<br />";
     echo "<input type='radio' name='q".$i."' value='ans5' />" .$row["ans5"]. "<br />";
     echo "<hr />";
     $ids[$i]=$row["ID"];
     }
        
$_SESSION["i"]=$i;
$_SESSION["ids"]=$ids;

            echo"<br /><br />
                <input type='submit' value='Πάτησε για να δεις το αποτέλεσμα' />
    </form>
</body>
</html>";

?>