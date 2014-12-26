<?php
require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role(1);
echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<meta charset='utf-8' />
	<style type='text/css'>
		th, td {padding:5px}
	</style>
</head>

<body>
	<h1>Διαχειριστής του Κουίζ</h1>
	<h2><a href='insert.php'>Προσθήκη Νέας Κατηγορίας</a></h2>
	<h2><a href='search.php'>Αναζήτηση Κατηγορίας</a></h2>
	<table border=1>
		<tr>
			<th>A/A</th>
			<th>Όνομα Κατηγορίας</th>
			<th>Περιγραφή Κατηγορίας</th>
			<th colspan='3'><br /></th>
		</tr>";

	$query = mysql_query("SELECT * FROM subjects");
	$i=0;
	while($row = mysql_fetch_array($query))
	{
		$i++;
		echo"
		<tr>
			<td>".$i."</td>
			<td>".$row["cat"]."</td>
			<td>".$row["descr"]."</td>
			<td><a href='view.php?id=".$row["ID"]."'>Προβολή</a></td>
			<td><a href='delete.php?id=".$row["ID"]."'>Διαγραφή</a></td>
			<td><a href='update.php?id=".$row["ID"]."'>Τροποποίηση</a></td>			
		</tr>";
	}
/*	mysql_close($link); */
echo"
	</table>
</body>
</html>";

?>