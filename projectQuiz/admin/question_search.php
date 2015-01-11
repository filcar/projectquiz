<?php
require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role(1);
$epilogi = $_SESSION["epilogi"];
echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org
                                            /TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8' />
    <link rel='stylesheet' type='text/css' href='../layout/main.css'>
</head>

<body>
    <div id='header'>Διαχείριση Ερωτήσεων</div>
    
    <div id='nav'>
        <h3>Αναζήτηση Ερώτησης</h3>
        <h4><a href='questions.php'>Επιστροφή</a></h4>
    </div>
    
    <div id='menu'>";include ("../layout/menu.php");echo "</div>

    <div id='section_user'>";
$query_sub = mysql_query("SELECT description FROM subjects WHERE ID='"
                                                                .$epilogi."'");
$cat_epilogi=mysql_fetch_array($query_sub);
    echo "<h2> Κατηγορία: ".$cat_epilogi["description"]."</h2>";
    
echo "<form method='post' action='question_search-submit.php'>
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
        
        <input type='submit' name='submit' value='Αναζήτηση'/>
    </form>
    </div><br/><br/>
    
<div id='footer'>";include "../layout/footer.php";echo "</div>

</body>
</html>";
?>