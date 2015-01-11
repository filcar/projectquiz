<?php
include("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role("0");

$nums_q=0;
if (isset($_POST["epilogi"])) $epilogi = $_POST["epilogi"];
if (isset($_POST["nums_q"])) $nums_q=$_POST["nums_q"];

$targetTime = time() + ($nums_q * 30);
$actualTime = time();
$remainingSeconds = $targetTime - $actualTime;
$hiden_ans="class='hidden'";
$check=0;
$hiden_div="";
if (isset($_POST["check"])) {
    $hiden_div = "class='hidden'";
    $hiden_ans = "";
    $check=1;
    $i=$_SESSION["i"];
    $ids=$_SESSION["ids"];
    $quest=$_SESSION["quest"];
    $correct=$_SESSION["correct"];
    $epilogi=$_SESSION["epilogi"];
    $username=$_SESSION["username"];
}

echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org
                                            /TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8' />
    <link rel='stylesheet' type='text/css' href='../layout/main.css'>";
?>

<script type="text/javascript">
    
    var seconds = <?php echo $remainingSeconds; ?> 
    var chk=<?php echo $check; ?>  
    function chkset(){
            chk=1;
    }
    function setCountDown ()
    {
    if (chk==0){
        seconds--;
        document.getElementById("remain").innerHTML = seconds+" δευτερόλεπτα";
        SD=window.setTimeout( "setCountDown()", 1000 );
        if (seconds == '00')
        {
           seconds = "00"; window.clearTimeout(SD);
           window.alert("Ο χρόνος δυστυχώς έληξε. Πάτα OK για να συνεχίσεις!");
                                      // change timeout message as required
           window.location = "questions.php" // Add your redirect url
        } 
    }
    }
//Η έξοδος από την σελίδα χωρίς να υπάρχει υποβολή, καταχωρείται ως αποτυχία
        window.onbeforeunload = onExit;
        window.onunload = test;
    function test(){
        if (chk === 0)
        {
            window.location = "onclose.php";
        }
    }
    function onExit(evt)
    {
        return "Η έξοδος καταγράφεται ως αποτυχία!!!";
    }
</script>

<?php
echo "
</head>

<body  onload='setCountDown()' onbeforeunload='onExit()' >
<div id='remain'>"; echo "$remainingSeconds seconds"; echo "</div>

<div id='header'>Ερωτήσεις Quiz</div>

<div id=nav_user><br/>
    Επιλέξτε τις σωστές απαντήσεις και πατήστε το κουμπί στο τέλος της σελίδας
                                                        για υποβολή.<br/><br/>
    Πρέπει να ολοκληρώσετε το Quiz μέσα στην προθεσμία του χρόνου.<br/><br/>
    Κάθε σωστή απάντηση λαμβάνει 10 βαθμούς.<br/>";

echo "</div>

<div id='menu'>";include ("../layout/menu.php");echo "</div>";

//----------Κώδικας αποτελέσματος - καταχώρησης στη βάση 
if (isset($_POST["check"]))
{
    echo "<div id='section_user_ans' ".$hiden_ans.">";
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
    echo "Αποτέλεσμα: ".$score."% <br/>
    </div>";
    if(isset($epilogi))
    {
        if($score==0) $scale="Αποτυχία";
        if($score>0) $scale="Ανεπαρκής";
        if($score>50) $scale="Καλώς";
        if($score>70) $scale="Πολύ καλά";
        if($score>90) $scale="Αριστα";
        $datetime=date("Y-d-m H:i:s");
        mysql_query("INSERT INTO scores (user_name, scale, subject_ID, score,
                        playdate) VALUES ('$username', '$scale', '$epilogi',
                                                    '$score', '$datetime')");
        $score=0;
    unset($_SESSION["epilogi"]);
    }
}
//---------
echo "<div id=section_user ".$hiden_div.">
    <h3>Απαντήστε στις παρακάτω ερωτήσεις</h3>";
    $ids = array();
    $quest = array();
    $correct = array();
    $all_rows=(mysql_query("SELECT * FROM questions WHERE
                subject_ID='".$epilogi."' ORDER BY RAND() LIMIT ".$nums_q));
    
    $i=0;
echo "<form method='post' action='questions.php'>";
        while($row=mysql_fetch_array($all_rows))
        {
            $i++;
echo "<table>
        <tr>
            <td><img src='../layout/question.jpg' width=30/></td>
            <td><b><u>".$i."η Ερώτηση:</u>&nbsp;&nbsp;&quot;"
                                        .$row["question"]."&quot;</b></td>
        </tr>
      </table>";
echo "<input type='radio' name='q".$i."' value='ans1' />".$row["ans1"].
                                                                    "<br />";
echo "<input type='radio' name='q".$i."' value='ans2' />".$row["ans2"].
                                                                    "<br />";
echo "<input type='radio' name='q".$i."' value='ans3' />".$row["ans3"].
                                                                    "<br />";
echo "<input type='radio' name='q".$i."' value='ans4' />".$row["ans4"].
                                                                    "<br />";
echo "<input type='radio' name='q".$i."' value='ans5' />".$row["ans5"].
                                                                    "<br />";
echo "<hr />";

    $ids[$i]=$row["ID"];
    $quest[$i]=$row["question"];
    $correct[$i]=$row[$row["corans"]];
        }
        
    $_SESSION["i"]=$i;
    $_SESSION["ids"]=$ids;
    $_SESSION["quest"]=$quest;
    $_SESSION["correct"]=$correct;
    $_SESSION["epilogi"]=$epilogi;

echo"<br /><br />
    <input type='hidden' name='check' value='1'/>
    <input type='submit' onclick='chkset()' 
                                value='Πάτησε για να δεις το αποτέλεσμα' />
    </form><br/>

</div>";

echo "<div id='footer'>";include "../layout/footer.php";echo "</div>

</body>
</html>";
?>