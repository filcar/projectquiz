<?php
$hiden1="";
if (!isset($_SESSION["username"])) {
    $hiden1 = "class='hidden'";
}

echo "<a href='./index.php'>Αρχική σελίδα</a> | <a ".$hiden1." href='../includes/logout.php'>Αποσύνδεση</a>";

?>