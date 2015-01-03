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
        <div id=section_user>
        <form method='post' action='includes/register-submit.php'>
            <table> 
              <tr><td>Όνοματεπώνυμο χρήστη:</td><td width='300'><input type='text' name='fullname' /></td></tr>
              <tr><td>Όνομα χρήστη:</td><td> <input type='text' name='username' /></td></tr>
              <tr><td>Κωδικός χρήστη:</td><td> <input type='password' name='password' /></td></tr>
            </table>    
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