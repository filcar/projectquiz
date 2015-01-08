<?php
require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role(1);

$cat=$_POST["cat"];
$descr=$_POST["descr"];

echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org
                                            /TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8' />
    <link rel='stylesheet' type='text/css' href='../layout/main.css'>
</head>

<body>
    <div id='header'>Διαχείριση Κατηγοριών</div>
    
    <div id='nav'>
        <h3>Αναζήτηση Κατηγορίας</h3>
        <h4><a href='categories.php'>Επιστροφή</a></h4>
    </div>

    <div id='menu'>";include ("../layout/menu.php");echo "</div>
    
<div id='section'>
    <table border=1>
	<tr>
            <th>Κωδικός</th>
            <th>Όνομα Κατηγορίας</th>
            <th>Περιγραφή Κατηγορίας</th>
            <th colspan='2'><br /></th>
	</tr>";

    $query = mysql_query("SELECT * FROM subjects WHERE subject_name LIKE
                            '%".$cat."%' AND description LIKE '%".$descr."%'");
    while($row = mysql_fetch_array($query))
    {
        echo"
        <tr>
            <td>".$row["ID"]."</td>
            <td>".$row["subject_name"]."</td>
            <td>".$row["description"]."</td>
            <td><a href='categ_delete.php?id=".$row["ID"]."'>Διαγραφή</a></td>
            <td><a href='categ_update.php?id=".$row["ID"]."'>Τροποποίηση</a></td>
        </tr>";
    }
echo"
	</table>
</div>
</body>
</html>";
?>