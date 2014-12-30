<?php

include("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role("0");
$_SESSION["t"]=time()+15;
echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta charset='utf-8' />
<link rel='stylesheet' type='text/css' href='../layout/main.css'>
</head>
<body>
<h1>Απαντήστε στις παρακάτω ερωτήσεις</h1>
";
$epilogi=$_POST["epilogi"];
$nums_q=$_POST["nums_q"];
$ids = array();
$all_rows=(mysql_query("SELECT * FROM questions WHERE subject_ID='".$epilogi."' ORDER BY RAND() LIMIT ".$nums_q));
$i=0;
echo "<form method='post' action='results.php'>";
while($row=mysql_fetch_array($all_rows))
{$i++;
echo "<u><b>".$i."η Ερώτηση: </u> </b> </br>";
echo $row[1]."</br>";
echo "<input type='radio' name='q".$i."' value='ans1' />" .$row[2]. "<br />";
echo "<input type='radio' name='q".$i."' value='ans2' />" .$row[3]. "<br />";
echo "<input type='radio' name='q".$i."' value='ans3' />" .$row[4]. "<br />";
echo "<input type='radio' name='q".$i."' value='ans4' />" .$row[5]. "<br />";
echo "<input type='radio' name='q".$i."' value='ans5' />" .$row[6]. "<br />";
echo "<hr />";
$ids[$i]=$row["ID"];
}
$_SESSION["i"]=$i;
$_SESSION["ids"]=$ids;

echo"
<br /><br />

<input type='submit' value='Πάτησε για να δεις το αποτέλεσμα' />
</form>
</body>
</html>
";

?>