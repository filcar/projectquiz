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
    	p {font-weight:bold; font-size:200%;}
	#on1 {color:red;}
    </style>
</head>

<body>
    <h1>Διαχειριστής του Κουίζ</h1>
    <h2>Προβολή Αντικειμένου</h2>
    <h3><a href='categories.php'>Επιστροφή</a></h3>";

    $id=$_GET["id"];
    $query1 = mysql_query("select * from subjects where ID='".$id."'");
    while($row1 = mysql_fetch_array($query1))
    {
    echo"
    <p>Όνομα Κατηγορίας: <span id='on1'>".$row1["subject_name"]."</span></p>
    <p>Περιγραφή Κατηγορίας: <span id='on1'>".$row1["description"]."</span></p>";
    }
echo"
</body>
</html>";

?>