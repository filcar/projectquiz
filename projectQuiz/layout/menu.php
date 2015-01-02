<?php

if(!isset($_SESSION["username"]))$hiden = "class='hidden'";
echo "<a href='./index.php'>Αρχική σελίδα</a> | <a "
.$hiden. "href='../includes/logout.php'>Αποσύνδεση</a>";

?>