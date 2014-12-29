<?php
//include_once ("includes/register-submit.php");
session_start();
echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns='http://www.w3.org/1999/xhtml'>
    <head>
        <meta charset='utf-8' />

    </head>
    <body>
        <h2>Εγγραφή νέου χρήστη</h2>
        <form method='post' action='includes/register-submit.php'>
            Όνοματεπώνυμο χρήστη: <input type='text' name='fullname' /><br /><br />
            Όνομα χρήστη: <input type='text' name='username' /><br /><br />
            Κωδικός χρήστη: <input type='password' name='password' /><br /><br />
            <input type='submit' value='Εγγραφή' />
        </form>
        <p>";
if(isset($_SESSION[msg])) {
    echo $_SESSION[msg];
    unset($_SESSION[msg]);
}
echo "</p>
        <h3><a href='index.php'>Επιστροφή</a></h3>
    </body>
</html>";
?>