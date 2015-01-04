<?php

require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role(1);

$epilogi=$_POST["epilogi"];
$categ_questions = (mysql_query("SELECT * FROM questions WHERE subject_ID='".$epilogi."'"));
$categ_query = (mysql_query("SELECT * FROM subjects WHERE ID='".$epilogi."'"));
$categ_row = mysql_fetch_array($categ_query);

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
        
    <form method='post' action='questions.php'>
    Επιλογή Κατηγορίας
        <select name='epilogi'>";
        $query = mysql_query("SELECT * FROM subjects");
	while($row = mysql_fetch_array($query))
	{
             echo" <option value='".$row["ID"]."'>".$row["subject_name"]."
                   </option>";
	}
echo "	</select>
    <br />
	<input type='submit' value='Συνέχισε' />
    </form>
        <br/><a href='question_insert.php'>Nέα Ερώτηση</a>
        <br/><a href='question_search.php'>Αναζήτηση Ερώτησης</a>
    </div>
    <div id='menu'>";include ("../layout/menu.php");echo "</div>
    <div id='section_user'>
    <h2>Κατηγορία:&nbsp;&nbsp;&nbsp".$categ_row["subject_name"]."&nbsp;&nbsp;&nbsp;(".$categ_row["description"].")</h2>
    <table border=1>
        <tr>
            <th>Κωδικός Ερώτησης</th>
            <th>Ερώτηση</th>
            <th>Σωστή Απάντηση</th>
            <th colspan='2'><br /></th>
	</tr>";

	while($qrow = mysql_fetch_array($categ_questions))
	{
        echo"
        <tr>
            <td rowspan='6'>".$qrow["ID"]."</td>
            <td class='quest'>".$qrow["question"]."</td>
            <td rowspan='6'>".$qrow["corans"]."</td>  
            <td rowspan='6'><a href='question_view.php?id=".$qrow["ID"]."'>Προβολή</a><br/><br/>
            <a href='question_delete.php?id=".$qrow["ID"]."'>Διαγραφή</a><br/><br/>
            <a href='question_update.php?id=".$qrow["ID"]."'>Τροποποίηση</a></td>			
	</tr>
        <tr>

            <td> <b><u>Απάντηση 1:</u>&nbsp;&nbsp;&nbsp;</b>".$qrow["ans1"]."</td>
        </tr>
        <tr>
            <td> <b><u>Απάντηση 2:</u>&nbsp;&nbsp;&nbsp;</b>".$qrow["ans2"]."</td>
         </tr>
        <tr>
            <td> <b><u>Απάντηση 3:</u>&nbsp;&nbsp;&nbsp;</b>".$qrow["ans3"]."</td>
        </tr>
        <tr>
            <td> <b><u>Απάντηση 4:</u>&nbsp;&nbsp;&nbsp;</b>".$qrow["ans4"]."</td>
        </tr>
        <tr>
            <td> <b><u>Απάντηση 5:</u>&nbsp;&nbsp;&nbsp;</b>".$qrow["ans5"]."</td>
        </tr>";
	}
echo"
    </table>
    </div>
</body>

</html>";

?>