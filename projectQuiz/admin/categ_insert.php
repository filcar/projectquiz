<?php

require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role(1);

echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/
                                            TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<meta charset='utf-8' />
</head>

<body>
    <h1>Διαχειριστής του Κουίζ</h1>
    <h2>Προσθήκη Νέας Κατηγορίας</h2>
    <h3><a href='categories.php'>Επιστροφή</a></h3>
    <form method='post' action='categ_insert-submit.php'>
	Όνομα Κατηγορίας: <input type='text' name='cat' /><br /><br />
	Περιγραφή Κατηγορίας: <input type='text' name='descr' /><br /><br />
	<input type='submit' name='addcat' value='Προσθήκη' />
    </form>
</body>
</html>";

?>