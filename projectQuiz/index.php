<?php
require_once("includes/connection.php");
session_start();

if(isset($_SESSION["username"])){
    if($_SESSION["role"]==1){
        header( "Location: admin/index.php" );}
    else {
        header( "Location: user/index.php" );}
}

echo "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org
                                            /TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8'/>
    <link rel='stylesheet' type='text/css' href='layout/main.css'>
</head>

<body>
<div id='header'>Καλώς ήρθατε στο Project Quiz</div>

<div id='nav'><br /><br />
<form action='includes/login.php' method='post'>
    <p>Σύνδεση χρήστη<p>
    <input type='text' name='username' placeholder='Όνομα χρήστη'/><br /><br />
    <input type='password' name='password' placeholder='Κωδικός χρήστη'/>
                                                                    <br /><br />
    <input type='submit' value='Σύνδεση'/> <br/>
</form>";

if (isset($_GET["error"])){
    if ($_GET["error"] == 1) {
        echo "<div id='error'>Λάθος στοιχεία εισόδου</div>";
    }
}

echo "<br/><p><a href='register.php'>Εγγραφείτε τώρα</a></p>
</div>

<div id='section'>
<br/><br/>
<p>Στις σελίδες αυτές μπορείται να δοκιμάσετε τις γνώσεις σας<br />
   παίζοντας κουιζ και απαντώντας στις ερωτήσεις του.</p>
<p>Υπάρχει πλήθος κατηγοριών που μπορείται να επιλέξετε<br />
   και να βαθμολογηθείτε στις επιδόσεις σας!!!<br />
   Πρέπει όμως πρώτα να συνδεθείτε.</p>
<img src='layout/quiz.jpg' width=300px/>
<p>Αν έχεται ήδη έναν λογαριασμό, παρακαλώ συνδεθείτε<br/>
   χρησιμοποιώντας το όνομα χρήστη και τον κωδικό σας.<br/>
   Διαφορετικά ακολουθήστε την διαδικασία 
                                        <a href='register.php'>εγγραφής</a>.</p>
</div> 

<div id='footer'>";include "layout/footer.php";echo "</div>

</body>
</html>";
?>
