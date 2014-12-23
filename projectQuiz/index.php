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
</head>
<body>
 <h2>Καλώς ήρθατε στο Project Quiz</h2>
	<p>Αν έχεται ήδη έναν λογαριασμό παρακαλώ συνδεθείτε</p>
        <p>χρησιμοποιώντας το όνομα χρήστη και τον κωδικό σας</p>
        <form action='includes/login.php' method='post'>
            Όνομα χρήστη: <input type='text' name='username' /> <br />
            Κωδικός: <input type='password' name='password' />  <br />
            <input type='submit' value='Είσοδος'/> <br/>
            <p><a href='register.php'>Εγγραφείτε τώρα</a></p>
        </form>
 ";

if (isset($_GET["error"])){
if($_GET["error"]==1)
    echo "Λάθος όνομα χρήστη ή κωδικού πρόσβασης";
}
echo "
</body>
</html>";
?>