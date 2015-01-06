<?php
require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role("0");

$ids=$_SESSION["ids"];
$quest=$_SESSION["quest"];
$correct=$_SESSION["correct"];
$username=$_SESSION["username"];
$fullname=$_SESSION["fullname"];

if(!isset($_SESSION["epilogi"])) header("Location: index.php");
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
<div id='header'>Αποτελέσματα Quiz</div>

<div id=nav> </div>

<div id='menu'>";include ("../layout/menu.php");echo "</div>

<div id=section_user>";
    $sum=0;
    for($j=1;($j<$_SESSION["i"]+1);$j++)
    {
        echo"<hr /><br /><b><u>".$j."η Ερώτηση:</u></b>";
        $q="q".$j;
        if(!isset($_POST[$q]))
        {
            $msg="&nbsp;---&nbsp;Δεν συμπληρώθηκε!!!<br /><br />";
            echo $msg;
        }
        else
        {
            $ans=$_POST[$q];
            mysql_query("SET NAMES utf8");
            $query = ("SELECT ".$ans." FROM questions WHERE ID='".$ids[$j]."'");
            $result = mysql_query($query) or die(mysql_error());
            $row=mysql_fetch_array($result);
            echo "&nbsp;---&nbsp;".$quest[$j]."<br /><br />
                  <b><u>Η δική σας απάντηση:</u></b>&nbsp;---&nbsp;".$row[0]."
                                                                <br /><br />";
            if (check_ans($ids[$j], $ans))
            {
                $sum = $sum + 10;
                echo "<b>Σωστή απάντηση !!!&nbsp;---&nbsp;Πήρατε 10 βαθμούς</b>
                                                                <br /><br />";
            }
            else 
            {
                echo "<b>Λάθος απάντηση !!! </b><br /><br />
                <b><u>Σωστή απάντηση η:</u></b>&nbsp;---&nbsp;".$correct[$j].
                                                                "<br /><br />";
            }
        }
    }
    $score=$sum*10/$_SESSION["i"];
    echo "<br /><hr /><hr /><br />
                    <b><u>Αποτέλεσμα:</u></b>&nbsp;&nbsp;&nbsp;".$score."%
</div><br />

<div id='footer'>";include "../layout/footer.php";echo "</div>

</body>
</html>";

if($score>0 && isset($epilogi))
{
    $datetime=date("d/m/y");
    mysql_query("INSERT INTO scores (user_name, fullname, subject_ID, score,
                    playdate) VALUES ('$username', '$fullname', '$epilogi',
                        '$score', '$datetime')");
    $score=0;
    unset($_SESSION["epilogi"]);
}
?>