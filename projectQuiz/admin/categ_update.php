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

<body>";
    $id=$_GET["id"];
    $query = mysql_query("SELECT * FROM subjects WHERE ID='".$id."'");
    $row = mysql_fetch_array($query);
    $cat=$row["subject_name"];
    $descr=$row["description"];

echo"
    <div id='header'>Διαχειριστής του Κουίζ</div>
    
    <div id='nav'>
        <h2>Τροποποίηση της Κατηγορίας:</h2>
        <h2>".$cat."</h2>
        <h2>( ".$descr." )</h2>
        <br /><br />
        <h3><a href='categories.php'>Επιστροφή</a></h3>
    </div>
    
<div id='section'>
    <form method='post' action='categ_update-submit.php'>
        Όνομα Κατηγορίας: <input type='text' name='cat' value='".$cat."'
                                    maxlength='255' size='100' /><br /><br />
        Περιγραφή Κατηγορίας: <input type='text' name='descr' value='"
                            .$descr."' maxlength='255' size='100' /><br /><br />
        <input type='hidden' name='updatecat' value='".$id."' />
        <input type='submit' name='submit' value='Τροποποίηση' />
    </form>
</div>

<div id='footer'>";include "../layout/footer.php";echo "</div>

</body>
</html>";
?>