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
    <div id='header'>Διαχείριση Κατηγοριών</div>
    
    <div id='nav'>
        <h3>Αναζήτηση Κατηγορίας</h3>
        <h4><a href='categories.php'>Επιστροφή</a></h4>
    </div>
    
    <div id='menu'>";include ("../layout/menu.php");echo "</div>

<div id='section'>
    <form method='post' action='categ_search-submit.php'>
    	Όνομα Κατηγορίας: <input type='text' name='cat' maxlength='255'
                                                      size='100' /><br /><br />
	Περιγραφή Κατηγορίας: <input type='text' name='descr' maxlength='255'
                                                      size='100' /><br /><br />
	<input type='submit' name='submit' value='Αναζήτηση'/>
    </form>
</div>
</body>
</html>";
?>