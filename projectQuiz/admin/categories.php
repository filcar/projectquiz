<?php

require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role(1);

echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org
                                            /TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8' />
    <link rel='stylesheet' type='text/css' href='../layout/main.css'>
</head>

<body>
    <div id='header'>Διαχειριστής του Κουίζ</div>
    <div id='nav'>

    <h2><a href='categ_insert.php'>Προσθήκη Νέας Κατηγορίας</a></h2>
    <h2><a href='categ_search.php'>Αναζήτηση Κατηγορίας</a></h2>
    <h3><a href='index.php'>Επιστροφή</a></h3>
    
    </div>

    <table border=1>
        <tr>
            <th>Κωδικός</th>
            <th>Όνομα Κατηγορίας</th>
            <th>Περιγραφή Κατηγορίας</th>
            <th colspan='3'><br /></th>
	</tr>";

	$query = mysql_query("SELECT * FROM subjects");
	while($row = mysql_fetch_array($query))
	{
        echo"
        <tr>
            <td>".$row["ID"]."</td>
            <td>".$row["subject_name"]."</td>
            <td>".$row["description"]."</td>
            <td><a href='categ_view.php?id=".$row["ID"]."'>Προβολή</a></td>
            <td><a href='categ_delete.php?id=".$row["ID"]."'>Διαγραφή</a></td>
            <td><a href='categ_update.php?id=".$row["ID"]."'>Τροποποίηση</a></td>			
	</tr>";
	}
echo"
    </table>
</body>
</html>";

?>
