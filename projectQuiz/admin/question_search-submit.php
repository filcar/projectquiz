<?php
require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role(1);

$question=$_POST["question"];
$ans1=$_POST["ans1"];
$ans2=$_POST["ans2"];
$ans3=$_POST["ans3"];
$ans4=$_POST["ans4"];
$ans5=$_POST["ans5"];
$epilogi=$_SESSION["epilogi"];

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
        <h4>Αναζήτηση Ερώτησης</h4>
        <br/><a href='question_search.php'>Νέα Αναζήτηση</a>
        <br/><a href='questions.php'>Αλλαγή Κατηγορίας</a>
    </div>
    
    <div id='menu'>";include ("../layout/menu.php");echo "</div>
        
    <div id='section_user'>
    <table border=1>
	<tr>
            <th>Κωδικός Ερώτησης</th>
            <th>Ερώτηση</th>
            <th>Σωστή Απάντηση</th>
            <th colspan='2'><br /></th>
	</tr>";
    $query_sub = mysql_query("SELECT description FROM subjects WHERE ID='".$epilogi."'");
    $cat_epilogi=mysql_fetch_array($query_sub);
        echo "<h2> Κατηγορία: ".$cat_epilogi["description"]."</h2>";
    $query = mysql_query("SELECT * FROM questions WHERE
            subject_ID='".$epilogi."' AND
            question LIKE '%".$question."%' AND
            ANS1 LIKE '%".$ans1."%' AND
            ANS2 LIKE '%".$ans2."%' AND
            ANS3 LIKE '%".$ans3."%' AND
            ANS4 LIKE '%".$ans4."%' AND
            ANS5 LIKE '%".$ans5."%' ");
    
    while($row = mysql_fetch_array($query))
    {
    echo"
    <tr>
        <td rowspan='6'>".$row["ID"]."</td>
        <td class='quest'>".$row["question"]."</td>
        <td rowspan='6'>".$row["corans"]."</td>  
        <td rowspan='6'>
        <a href='question_delete.php?id=".$row["ID"]."'>Διαγραφή</a><br/><br/>
        <a href='question_update.php?id=".$row["ID"]."'>Τροποποίηση</a></td>			
    </tr>
    <tr>
        <td> <b><u>Απάντηση 1:</u>&nbsp;&nbsp;&nbsp;</b>".$row["ans1"]."</td>
    </tr>
    <tr>
        <td> <b><u>Απάντηση 2:</u>&nbsp;&nbsp;&nbsp;</b>".$row["ans2"]."</td>
    </tr>
    <tr>
        <td> <b><u>Απάντηση 3:</u>&nbsp;&nbsp;&nbsp;</b>".$row["ans3"]."</td>
    </tr>
    <tr>
        <td> <b><u>Απάντηση 4:</u>&nbsp;&nbsp;&nbsp;</b>".$row["ans4"]."</td>
    </tr>
    <tr>
        <td> <b><u>Απάντηση 5:</u>&nbsp;&nbsp;&nbsp;</b>".$row["ans5"]."</td>
    </tr>";
    }
echo"
    </table>
    </div>
</body>
</html>";
?>