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
    <table border=1>
        <tr>
            <th><h2><a href='categories.php'>Διαχείριση Κατηγοριών</a></h2></th>
            <th><h2><a href='questions.php'>Διαχείριση Ερωτήσεων</a></h2></th>
        </tr>
        <tr>
            <td><p>Προσθήκη νέας κατηγορίας</p>
                <p>Διαγραφή κατηγορίας</p>
                <p>Τροποποίηση κατηγορίας</p>
                <p>Αναζήτηση κατηγορίας</p>
                <p>Προβολή κατηγορίας</p><br /></td>
            <td><p>Προσθήκη νέας ερώτησης</p>
                <p>Διαγραφή ερώτησης</p>
                <p>Τροποποίηση ερώτησης</p>
                <p>Αναζήτηση ερώτησης</p>
                <p>Προβολή ερώτησης</p><br /></td>
        </tr>
    </table>
    <h2><a href='../includes/logout.php'>Έξοδος</a></h2>
</body>
</html>";

?>
