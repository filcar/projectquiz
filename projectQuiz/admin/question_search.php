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
</head>

<body>
    <h1>Διαχειριστής του Κουίζ</h1>
    <h2>Αναζήτηση Ερώτησης</h2>
    <h3><a href='questions.php'>Επιστροφή</a></h3>
    <form method='post' action='question_search-submit.php'>
        Ερώτηση: <input type='text' name='question' /><br /><br />";
/*	Απάντηση 1: <input type='text' name='ans1' /><br /><br />
        Απάντηση 2: <input type='text' name='ans2' /><br /><br />
        Απάντηση 3: <input type='text' name='ans3' /><br /><br />
        Απάντηση 4: <input type='text' name='ans4' /><br /><br />
        Απάντηση 5: <input type='text' name='ans5' /><br /><br />
        Σωστή Απάντηση: <input type='text' name='corans' /><br /><br />     */
echo"
    <input type='submit' name='submit' value='Αναζήτηση'/>
    </form>
</body>
</html>";

?>