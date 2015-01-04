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

<body>";
    $id=$_GET["id"];
    $query = mysql_query("SELECT * FROM questions WHERE ID='".$id."'");
    $row = mysql_fetch_array($query);
    
    $question=$row["question"];
    $ans1=$row["ans1"];
    $ans2=$row["ans2"];
    $ans3=$row["ans3"];
    $ans4=$row["ans4"];
    $ans5=$row["ans5"];
    $corans=$row["corans"];
//    $subj_ID=$row["subject_ID"];

echo"
    <h1>Διαχειριστής του Κουίζ</h1>
    <h2>Τροποποίηση της Ερώτησης:   <span>".$id." </span></h2>
    <h3><a href='questions.php'>Επιστροφή</a></h3>
    <br /><br />
    <form method='post' action='question_update-submit.php'>
        Ερώτηση: <input type='text' name='question' value='".$question."' /><br /><br />
	Απάντηση 1: <input type='text' name='ans1' value='".$ans1."' /><br /><br />
        Απάντηση 2: <input type='text' name='ans2' value='".$ans2."' /><br /><br />
        Απάντηση 3: <input type='text' name='ans3' value='".$ans3."' /><br /><br />
        Απάντηση 4: <input type='text' name='ans4' value='".$ans4."' /><br /><br />
        Απάντηση 5: <input type='text' name='ans5' value='".$ans5."' /><br /><br />
        Σωστή Απάντηση: <input type='text' name='corans' value='".$corans."' /><br /><br />
        <input type='hidden' name='updatequestion' value='".$id."' />
        <input type='submit' name='submit' value='Τροποποίηση' />
    </form>
</body>
</html>";

?>