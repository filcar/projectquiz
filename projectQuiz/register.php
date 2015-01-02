<?php
//include_once ("includes/register-submit.php");
session_start();
echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns='http://www.w3.org/1999/xhtml'>
    <head>
        <meta charset='utf-8' />
    <link rel='stylesheet' type='text/css' href='layout/main.css'>
    </head>
    <body>
        <div id='header'>Εγγραφή νέου χρήστη</div>
        <div id='nav'>.</div>
        <div id='menu'>";
        include ("layout/menu.php");
        echo "</div>
        <div id=section>
        <form method='post' action='includes/register-submit.php'>
            Όνοματεπώνυμο χρήστη: <input type='text' name='fullname' /><br /><br />
            Όνομα χρήστη: <input type='text' name='username' /><br /><br />
            Κωδικός χρήστη: <input type='password' name='password' /><br /><br />
            <input type='submit' value='Εγγραφή' />
        </form>
        <p>";
if(isset($_SESSION["msg"])) {
    echo $_SESSION["msg"];
    unset($_SESSION["msg"]);
}
echo "</p>
    </div>
        <div id='footer'>";include "./layout/footer.php";echo "</div>
    </body>
</html>";
?>