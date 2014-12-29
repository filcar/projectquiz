<?php
require_once("includes/connection.php");

session_start();
if(isset($_SESSION["username"])){
    if($_SESSION["role"]==1){
        header( "Location: admin/index.php" );
    }else {
        header( "Location: user/index.php" );   
    }
}
echo "
<html>
<head>
    <meta charset='utf-8'/>
    <link rel='stylesheet' type='text/css' href='layout/main.css'>
</head>
<body>
 <div id='header'>Καλώς ήρθατε στο Project quiz</div>
<div id=nav><br /><br />
        <form action='includes/login.php' method='post'>
        <p> Σύνδεση χρήστη<p>
            <input type='text' name='username' placeholder='Όνομα χρήστη'/> <br /><br />
            <input type='password' name='password' placeholder='Κωδικός χρήστη'/>  <br /><br />
            <input type='submit' value='Σύνδεση'/> <br/>
         </form>
 
 ";

if (isset($_GET["error"])){
    if ($_GET["error"] == 1) {
        echo "<div id='error'>Λάθος στοιχεία εισόδου</div>";
    }
}

echo "<br/><p><a href='register.php'>Εγγραφείτε τώρα</a></p>
</div>
 <div id='section'>
 <p>Στις σελίδες αυτές μπορείται να δοκιμάσετε τις γνώσεις σας<br />
    παίζοντας κουιζ και απαντώντας στις ερωτήσεις του.</p>
    <p>Υπάρχει πλήθος κατηγοριών που μπορείται να επιλέξετε<br />
        και να βαθμολογηθείτε στις επιδόσεις σας!!!<br />
       Πρέπει όμως πρώτα να συνδεθείτε</p>
    <img src='layout/quiz.jpg' width=300px>
    <p>Αν έχεται ήδη έναν λογαριασμό παρακαλώ συνδεθείτε<br/>
           χρησιμοποιώντας το όνομα χρήστη και τον κωδικό σας</p>
</div> 
<div id='footer'>copyright (2014). TEISER team(Δομουχτής, Καραντζούλης, Κιοδέλης)</div>
</body>
</html>";
?>
