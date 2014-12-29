<?php
include("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role("0");
 //echo $_SERVER['HTTP_USER_AGENT'];

echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8' />
    <link rel='stylesheet' type='text/css' href='../layout/main.css'>
</head>
<body>


<div id='header'>Καλώς ήρθατε στο Μαθηματικό Quiz μας</div>
<div id=nav><p>Επιλέξτε μία από τις παρακάτω θεματικές ενότητες</p>
<form method='post' action='questions.php'>
Ενότητα:<select name='epilogi'>";
	//
        $query = mysql_query("SELECT * FROM subjects");
	$i=0;
	while($row = mysql_fetch_array($query))
	{
             echo" <option value='".$row["cat"]."'>".$row["cat"]."</option>";
	}
        //
echo "	</select>
	<br /><br /> <br /><br /> <br /><br /> <br /><br />
	<input type='submit' value='Ξεκίνα το Quiz' />
</form>
</div>
<div id='footer'>";include "../layout/footer.php";echo "</div>
</body>
</html>
";

?>
