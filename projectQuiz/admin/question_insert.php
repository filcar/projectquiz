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
    <link rel='stylesheet' type='text/css' href='../layout/main.css'>
</head>

<body>
<div id='header'>Διαχείριση Ερωτήσεων</div>

    <div id='nav'>
        <h3>Προσθήκη Νέας Ερώτησης</h3>
        <h4><a href='questions.php'>Επιστροφή</a></h4>
    </div>
    
<div id='menu'>";include ("../layout/menu.php");echo "</div>

<div id='section_user'>
    <form method='post' action='question_insert-submit.php'>
	Ερώτηση: <input type='text' name='question' maxlength='255'
                                                      size='170' /><br /><br />
	Απάντηση 1: <input type='text' name='ans1' maxlength='255'
                                                      size='170' /><br /><br />
        Απάντηση 2: <input type='text' name='ans2' maxlength='255'
                                                      size='170' /><br /><br />
        Απάντηση 3: <input type='text' name='ans3' maxlength='255'
                                                      size='170' /><br /><br />
        Απάντηση 4: <input type='text' name='ans4' maxlength='255'
                                                      size='170' /><br /><br />
        Απάντηση 5: <input type='text' name='ans5' maxlength='255'
                                                      size='170' /><br /><br />
        Σωστή Απάντηση:
        <select name='corans'>
            <option value='ans1'>ans1</option>
            <option value='ans2'>ans2</option>
            <option value='ans3'>ans3</option>
            <option value='ans4'>ans4</option>
            <option value='ans5'>ans5</option>
        </select><br /><br />
        
	<input type='submit' name='addquestion' value='Προσθήκη Ερώτησης' />
        
    </form>
</div><br/><br/>
<div id='footer'>";include "../layout/footer.php";echo "</div>
</body>
</html>";
?>