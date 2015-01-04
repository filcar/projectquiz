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
    <div id='nav'>.</div>
    <div id='menu'>";include ("../layout/menu.php");echo "</div>
    <div id='section'>
    <h4><a href='categories.php'>Διαχείριση Κατηγοριών</a></h4>
        Προσθήκη νέας κατηγορίας<br />
        Διαγραφή κατηγορίας<br />
        Τροποποίηση κατηγορίας<br />
        Αναζήτηση κατηγορίας<br />
        Προβολή κατηγορίας<br />
    <hr/>
    <h4><a href='questions.php'>Διαχείριση Ερωτήσεων</a></h4>
            Προσθήκη νέας ερώτησης<br />
            Διαγραφή ερώτησης<br />
            Τροποποίηση ερώτησης<br />
            Αναζήτηση ερώτησης<br />
            Προβολή ερώτησης<br />

    </div>
</body>
</html>";
?>
