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
    <style type='text/css'>
    	th, td {padding:5px}
    </style>
</head>

<body>
    <h1>Διαχειριστής του Κουίζ</h1>
    
<p>Επιλέξτε μία από τις παρακάτω θεματικές ενότητες</p>
    <form method='post' action='questions-submit.php'>
    Ενότητα:<select name='epilogi'>";
        $query = mysql_query("SELECT * FROM subjects");
	while($row = mysql_fetch_array($query))
	{
             echo" <option value='".$row["ID"]."'>".$row["subject_name"]."
                   </option>";
	}
echo "	</select>
    <br /><br /> <br /><br />
	<input type='submit' value='Ξεκίνα το Quiz' />
    </form>

<br /><br /> <br /><br />

    <table border=1>
        <tr>
            <th>Κωδικός</th>
            <th>Όνομα Κατηγορίας</th>
            <th>Περιγραφή Κατηγορίας</th>
            <th colspan='3'><br /></th>
	</tr>";




?>