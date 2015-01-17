<?php
include("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role("0");

$username=$_SESSION["username"];
$fullname=$_SESSION["fullname"];


echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org
                                            /TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8' />
    <link rel='stylesheet' type='text/css' href='../layout/main.css'>
</head>

<body>
<div id='header'>Καλώς ήρθατε στο Quiz μας. Χρήστης: ".$fullname."</div>

<div id=nav>
 <a href='top_10.php'>Τοπ 10 επιδόσεων</a><br/>
    <p>Επιλέξτε μία από τις παρακάτω θεματικές ενότητες:</p>
<form method='post' action='questions.php'>
    
    Ενότητα:<select name='epilogi'>";
    $query = mysql_query("SELECT * FROM subjects");
    while($row = mysql_fetch_array($query))
    {
       echo" <option value='".$row["ID"]."'>".$row["subject_name"]."</option>";
    }
       echo"</select><br /><br />
    
    Πλήθος Ερωτήσεων:<select name='nums_q'>
                        <option value='5'>ΠΕΝΤΕ</option>
                        <option value='10'>ΔΕΚΑ</option>
                     </select><br /><br />
                     
    <input type='submit' value='Ξεκίνα το Quiz' />
</form>
</div>

<div id='menu'>";include ("../layout/menu.php");echo "</div>

<div id=section>
    <h2>Οι επιδόσεις σου στο Quiz!</h2>
    <table class='kenter' border=1>
        <tr>
            <th>Κωδικός Quiz</th>
            <th>Ημερομηνία</th>
            <th>Κατηγορία</th>
            <th>Βαθμολογία</th>
            <th>Αποτέλεσμα</th>
        </tr>";

$all_scores = mysql_query("SELECT scores.id as ID, playdate, subject_name,
              score, scale FROM scores, subjects WHERE subject_ID=subjects.id
                                 AND user_name='".$username."' ORDER BY ID");
    while($score_row = mysql_fetch_array($all_scores))
    {
        echo"
        <tr>
            <td>".$score_row["ID"]."</td>
            <td>".date("m/d/Y H:i:s", strtotime($score_row["playdate"]))."
            </td>
            <td>".$score_row["subject_name"]."</td>
            <td>".$score_row["score"]."%</td>
            <td>".$score_row["scale"]."</td>
        </tr>";
    }

    echo" </table>

</div>
            
<div id='footer'>";include "../layout/footer.php";echo "</div>

</body>
</html>";
?>