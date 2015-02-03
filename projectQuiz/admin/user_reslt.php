<?php
include("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role("1");

if(isset($_GET["id"])) 
    {   $id=$_GET["id"];
        unset($_GET["id"]);
    }
$query = mysql_query("SELECT username,fullname FROM user WHERE id='".$id."'");
$row_user = mysql_fetch_array($query);
$user=$row_user["username"];
$user_fullname=$row_user["fullname"];

echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org
                                            /TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8' />
    <link rel='stylesheet' type='text/css' href='../layout/main.css'>
</head>

<body>
<div id='header'>Επιδόσεις Χρηστών: ".$user."</div>

<div id=nav>
    <h4><a href='view_user.php'>Διαχείριση Χρηστών</a></h4>
    <hr/>

</div>

<div id='menu'>";include ("../layout/menu.php");echo "</div>

<div id=section>
    <h2>Αναφορά επιδόσεων. Χρήστης: ".$row_user["fullname"]."</h2>
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
                                 AND user_name='".$user."' ORDER BY ID");
    while($score_row = mysql_fetch_array($all_scores))
    {
        echo"
        <tr>
            <td>".$score_row["ID"]."</td>
            <td>".date("d/m/Y H:i:s", strtotime($score_row["playdate"]))."
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