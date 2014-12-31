<?php

include("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role("0");
if (isset($_POST["epilogi"])) $epilogi = $_POST["epilogi"];
if (isset($_POST["nums_q"])) $nums_q=$_POST["nums_q"];
$targetTime = time() + ($nums_q * 20);
$actualTime = time();
$remainingSeconds = $targetTime - $actualTime;
echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta charset='utf-8' />
<link rel='stylesheet' type='text/css' href='../layout/main.css'>";?>
   <script type="text/javascript">
      var seconds = <?php echo $remainingSeconds; ?> 
      function setCountDown ()
        {
        seconds--;
        document.getElementById("remain").innerHTML = seconds+" seconds";
        SD=window.setTimeout( "setCountDown()", 1000 );
        if (seconds == '00') { seconds = "00"; window.clearTimeout(SD);
            window.alert("Ο χρόνος δυστυχώς έληξε. Πάτα OK για να συνεχίσεις!"); // change timeout message as required
            window.location = "../user/results.php" // Add your redirect url
 	} 
    }

    </script>
<?php
echo "</head>
<body  onload='setCountDown();'>
<div id='remain'>"; echo "$remainingSeconds seconds"; echo "</div>
<div id='header'>Απαντήστε στις παρακάτω ερωτήσεις</div>
<div id=nav_user><br/>Επιλέξτε τις σωστές απαντήσεις και πατήστε το κουμπί στο τέλος της σελίδας ια υποβολή <br/>
<br/>Πρέπει να ολοκληρώσετε το Quiz μέσα στην προθεσμία του χρόνου<br/><br/>
Κάθε σωστή απάντηση λαμβάνει 10 βαθμούς<br/></div>
<div id=section_user>
";
$ids = array();
$all_rows=(mysql_query("SELECT * FROM questions WHERE subject_ID='".$epilogi."' ORDER BY RAND() LIMIT ".$nums_q));
$i=0;
echo "<form method='post' action='results.php'>";
while($row=mysql_fetch_array($all_rows))
{$i++;
echo "<u><b>".$i."η Ερώτηση: </u> </b> </br>";
echo $row[1]."</br>";
echo "<input type='radio' name='q".$i."' value='ans1' />" .$row[2]. "<br />";
echo "<input type='radio' name='q".$i."' value='ans2' />" .$row[3]. "<br />";
echo "<input type='radio' name='q".$i."' value='ans3' />" .$row[4]. "<br />";
echo "<input type='radio' name='q".$i."' value='ans4' />" .$row[5]. "<br />";
echo "<input type='radio' name='q".$i."' value='ans5' />" .$row[6]. "<br />";
echo "<hr />";
$ids[$i]=$row["ID"];
}
$_SESSION["i"]=$i;
$_SESSION["ids"]=$ids;

echo"
<br /><br />

<input type='submit' value='Πάτησε για να δεις το αποτέλεσμα' />
</form>
<br/>
</div>
<div id='footer'>";include "../layout/footer.php";echo "</div>
</body>
</html>
";

?>