<?php
require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
//check_role(1);

if(isset($_GET["id"])) 
    {   $id=$_GET["id"];
        unset($_GET["id"]);
    }
    $query = mysql_query("SELECT username,fullname,role,approve FROM user WHERE id='".$id."'");
    $row = mysql_fetch_array($query);
    $query1= mysql_query("SELECT count(score) as cnt_sc,max(score) as max_sc,avg(score) as avg_sc FROM scores WHERE user_name='".$row["username"]."'");
    $row1 = mysql_fetch_array($query1);
    $query2= mysql_query("SELECT `subject_name`,count(score) as cnt_sc,max(score) as max_sc,avg(score) as avg_sc FROM scores,subjects WHERE subject_ID = subjects.ID and user_name='".$row["username"]."' group by `subject_ID`");
      
echo
"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <meta charset='utf-8'/>
    <link rel='stylesheet' type='text/css' href='../layout/main.css'>    
  </head>
  <body>
    <div id='header'>Καρτέλα χρήστη</div>
    <div id='nav'></div>
    <div id='menu'>";include ("../layout/menu.php");echo "</div>
    <div id='section_user'>
    <table  border=1>
        <tr><th colspan=2> ΠΡΟΒΟΛΗ ΣΤΟΙΧΕΙΩΝ ΧΡΗΣΤΗ</th></tr>
        <tr><td class='quest'>username</td><td>".$row["username"]."</td></tr>
        <tr><td class='quest'>Ονοματεπώνυμο</td><td>".$row["fullname"]."</td></tr>
        <tr><td class='quest'>Ρόλος</td><td>".$row["role"]."</td></tr>
        <tr><td class='quest'>Ενεργός</td><td>".$row["approve"]."</td></tr>
        <tr><th colspan=2>ΣΥΓΚΕΝΤΡΩΤΙΚΑ ΣΤΑΤΙΣΤΙΚΑ ΣΤΟΙΧΕΙΑ</th></tr>        
        <tr><td class='quest'>Συνολικές προσπάθειες</td><td>".$row1["cnt_sc"]."</td></tr>
        <tr><td class='quest'>Καλύτερη επίδοση</td><td>".$row1["max_sc"]."%</td></tr>
        <tr><td class='quest'>Συνολικός μέσος όρος</td><td>".number_format($row1["avg_sc"],2,",",".")."%</td></tr>
    </table>
    <br/>
    <table border=1>
        <tr><th colspan=4>-ΣΤΑΤΙΣΤΙΚΑ ANA ΚΑΤΗΓΟΡΙΑ QUIZ-</th></tr>
        <tr><th>Κατηγορία</th><th>Προσπάθειες</th><th>Καλύτερη επίδοση</th><th>Μέσος όρος</th></tr>
        ";
        while ($row2 = mysql_fetch_array($query2)) {
        echo "<tr><td>".$row2["subject_name"]."</td><td>".$row2["cnt_sc"]."</td><td>".$row2["max_sc"]."%</td><td>".number_format($row2["avg_sc"],2,",",".")."%</td></tr>";
        }
        echo
    "</table>

    </div>
  </body>
</html>"

//$row2 = mysql_fetch_array($query1);  

?>
