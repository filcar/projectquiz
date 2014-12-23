<?php

require_once("../includes/connection.php");

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
	<h2>Αναζήτηση Κατηγορίας</h2>
	<h3><a href='index.php'>Επιστροφή</a></h3>
	<table border=1>
		<tr>
			<th>A/A</th>
			<th>Όνομα Κατηγορίας</th>
			<th>Περιγραφή Κατηγορίας</th>
		</tr>";
$cat=$_POST["cat"];
$descr=$_POST["descr"];

	$query = mysql_query("SELECT * FROM subjects", $link);
	$i=0;
	while($row = mysql_fetch_array($query))
	{
		if($row['cat']==$cat || $row['descr']==$descr)
		{
			$i++;
			echo"
			<tr>
				<td>"; echo $i; echo"</td>
				<td>"; echo $row['cat']; echo"</td>
				<td>"; echo $row['descr']; echo"</td>
			</tr>";
		}
	}
/*	mysql_close($link); */
echo"	
	</table>
</body>
</html>";

?>