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
    <style type='text/css'>
    	th, td {padding:5px}
    </style>
</head>

<body>
    <h1>Διαχειριστής του Κουίζ</h1>
    <h2>Αναζήτηση Κατηγορίας</h2>
    <h3><a href='categories.php'>Επιστροφή</a></h3>
    <table border=1>
	<tr>
            <th>Κωδικός</th>
            <th>Όνομα Κατηγορίας</th>
            <th>Περιγραφή Κατηγορίας</th>
	</tr>";

    $query = mysql_query("SELECT * FROM subjects WHERE subject_name LIKE '%".$cat."%' AND description LIKE '%".$descr."%'");
    
    while($row = mysql_fetch_array($query))
    {
        echo"
        <tr>
            <td>".$row["ID"]."</td>
            <td>".$row["subject_name"]."</td>
            <td>".$row["description"]."</td>
        </tr>";
    }
echo"
	</table>
</body>
</html>";

?>