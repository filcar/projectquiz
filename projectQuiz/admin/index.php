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
        <h4><a href='view_user.php'>Διαχείριση Χρηστών</a></h4>
        <hr/>
        <h4><a href='categories.php'>Διαχείριση Κατηγοριών</a></h4>
        <hr/>
        <h4><a href='questions.php'>Διαχείριση Ερωτήσεων</a></h4>

    </div>
    <div id='menu'>";include ("../layout/menu.php");echo "</div>
    <div id='section'>
        <br/><br/><p>Στις σελίδες αυές ο διαχειριστής<br />
        μπορεί να διαμορφώνει το Quiz.</p>
        <p>Προσθέτει, διαγράφει και τροποποιεί τις θεματικές ενότητες!!!</p>
        <img src='../layout/quiz.jpg' width=300px/>
        <p>Προσθέτει, διαγράφει και τροποποιεί τις ερωτήσεις<br/>
        για κάθε καταχωρημένη θεματική ενότητα (κατηγορία)!!!</p>
    </div>
<div id='footer'>";include "../layout/footer.php";echo "</div>
</body>
</html>";
?>