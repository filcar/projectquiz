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
    <h2>Προβολή Ερώτησης</h2>
    <h3><a href='questions.php'>Επιστροφή</a></h3>";

    $id=$_GET["id"];
    $query1 = mysql_query("select * from questions where ID='".$id."'");
    while($row1 = mysql_fetch_array($query1))
    {
    echo"
        <p>Ερώτηση: <span id='on1'>".$row1["question"]."</span></p>
	<p>Απάντηση 1: <span id='on1'>".$row1["ans1"]."</span></p>
        <p>Απάντηση 2: <span id='on1'>".$row1["ans2"]."</span></p>
        <p>Απάντηση 3: <span id='on1'>".$row1["ans3"]."</span></p>
        <p>Απάντηση 4: <span id='on1'>".$row1["ans4"]."</span></p>
        <p>Απάντηση 5: <span id='on1'>".$row1["ans5"]."</span></p>
        <p>Σωστή Απάντηση: <span id='on1'>".$row1["corans"]."</span></p>";
    }
echo"
</body>
</html>";

?>