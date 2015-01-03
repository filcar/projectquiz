<?php

require_once("../includes/connection.php");

echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org
                                            /TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8' />
</head>

<body>";
    $id=$_GET["id"];
    $query = mysql_query("SELECT * FROM subjects WHERE ID=$id");
    $row = mysql_fetch_array($query);
    $cat=$row["subject_name"];
    $descr=$row["description"];
    $id1=$row["ID"];

echo"
	<h1>Διαχειριστής του Κουίζ</h1>
	<h2>Τροποποίηση Κατηγορίας <span>"; echo $cat."   ".$descr; echo" </span></h2>
	<h3><a href='categories.php'>Επιστροφή</a></h3>
        <br /><br />
	<form method='post' action='categ_update-submit.php'>
		Όνομα Κατηγορίας: <input type='text' name='cat' value='$cat' /><br /><br />
		Περιγραφή Κατηγορίας: <input type='text' name='descr' value='$descr' /><br /><br />
		<input type='hidden' name='updatecat' value='$id1' />
		<input type='submit' name='submit' value='Τροποποίηση' />
	</form>
</body>
</html>";

?>