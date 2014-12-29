<?php

include("../includes/connection.php");

echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta charset='utf-8' />

</head>
<body>
<h1>Απαντήστε στις παρακάτω ερωτήσεις</h1>
<form method='post' action='results.php'>

";
$epilogi=$_POST["epilogi"];
$all_rows=(mysql_query("SELECT * FROM questions WHERE test='".$epilogi."'"));
$i=0;
while($row=mysql_fetch_array($all_rows))
{$i++;
echo "<u><b>".$i."η Ερώτηση: </u> </b> </br>";
echo $row[1]."</br>";
echo "<input type='radio' name='q' value='ans1' />" .$row[3]. "<br />";
echo "<input type='radio' name='q' value='ans2' />" .$row[4]. "<br />";
echo "<input type='radio' name='q' value='ans3' />" .$row[5]. "<br />";
echo "<input type='radio' name='q' value='ans4' />" .$row[6]. "<br />";
echo "<input type='radio' name='q' value='ans5' />" .$row[7]. "<br />";

echo "<hr />";
}

echo"
<br /><br />
<input type='submit' value='Πάτησε για να δεις το αποτέλεσμα' />
</form>
</body>
</html>
";

?>