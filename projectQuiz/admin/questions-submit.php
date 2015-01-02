<?php

require_once("../includes/connection.php");

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
    <style type='text/css'>
	th, td {padding:5px}
    </style>
</head>

<body>
    <h1>Διαχειριστής του Κουίζ</h1>
    <h2>Κατηγορία:&nbsp;&nbsp;&nbsp".$categ_row["subject_name"]."&nbsp;&nbsp;&nbsp;(".$categ_row["description"].")</h2>
    <h2><a href='question_insert.php'>Προσθήκη Νέας Ερώτησης</a></h2>
    <h2><a href='question_search.php'>Αναζήτηση Ερώτησης</a></h2>
    <table border=1>
        <tr>
            <th>Κωδικός Ερώτησης</th>
            <th>Ερώτηση</th>
            <th>Σωστή Απάντηση</th>
            <th colspan='3'><br /></th>
	</tr>";

	while($qrow = mysql_fetch_array($categ_questions))
	{
        echo"
        <tr>
            <td>".$qrow["ID"]."</td>
            <td>".$qrow["question"]."</td>
            <td>".$qrow["corans"]."</td>  
            <td><a href='question_view.php?id=".$qrow["ID"]."'>Προβολή</a></td>
            <td><a href='question_delete.php?id=".$qrow["ID"]."'>Διαγραφή</a></td>
            <td><a href='question_update.php?id=".$qrow["ID"]."'>Τροποποίηση</a></td>			
	</tr>
        <tr>
            <td rowspan='5'></td>
            <td> <b><u>Απάντηση 1:</u>&nbsp;&nbsp;&nbsp;</b>".$qrow["ans1"]."</td>
            <td rowspan='5'></td>
            <td colspan='3' rowspan='5'></td>
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
</body>

</html>";

?>