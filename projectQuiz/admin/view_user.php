<?php
require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role(1);

$message="";
$search_user = "";
if(isset($_POST["search_user"])) $search_user=$_POST["search_user"];
if(isset($_GET["message"])) $message=$_GET["message"];

$vw_users = (mysql_query("SELECT * FROM user WHERE username LIKE '%".$search_user."%' or "
        . "fullname LIKE '%".$search_user."%'"));

echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org
                                            /TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8' />
    <link rel='stylesheet' type='text/css' href='../layout/main.css'>
</head>

<body>
<div id='header'>Διαχείριση χρηστών</div>
<div id='nav'>

    <br/><hr/>    
    <p style='color:red'>Αναζήτηση Χρήστη</p>
    <form method='post' action ='view_user.php'>
        <input type='text' name='search_user' maxlength='255'>
        <input type='submit' name='submit' value='Αναζήτηση'>
    </form>
    <br/><hr/>
    <br/><hr/>
    ";
        
    if($message=="incomplete")
                echo" <p>Πρέπει να συμπληρώσετε όλα τα πεδία της φόρμας.</p>";
    if($message=="successinsert")
                echo"<p>Η προσθήκη έγινε επιτυχώς.</p>";
    if($message=="successupdate")
                echo"<p>Η τροποποίηση έγινε επιτυχώς.</p>";
    if($message=="successdelete")
                echo"<p>Η διαγραφή έγινε επιτυχώς.</p>";

    echo"
</div>
<div id='menu'>";include ("../layout/menu.php");echo "</div>
<div id='section_user'>
    <h2>Τρέχων χρήστης: ".$_SESSION["username"]."</h2>
    <table border=1>
    <tr>
        <th>user</th>
        <th>Ονοματεπώνυμο</th>
        <th>Ρόλος</th>
        <th>Ενεργός</th>
        <th><br /></th>
    </tr>";

    while($qrow = mysql_fetch_array($vw_users))
    {
    echo"
    <tr>
        <td>".$qrow["username"]."</td>
        <td>".$qrow["fullname"]."</td>
        <td class='kenter'>"; if($qrow["role"]==1) echo "ADMINISTRATOR";
               else echo "SIMPLE USER"; echo "</td>          
        <td class='kenter'>"; if($qrow["approve"]==1) echo "NAI";
               else echo "ΟΧΙ"; echo "</td>  
        <td>
            <a href='user_profil.php?id=".$qrow["id"]."'>Καρτέλα χρήστη</a>
            <br /><br />";
            if($qrow["role"]==0) 
            echo "<a href='xxxxx.php?id=".$qrow["id"]."'>Επιδόσεις χρήστη</a>";
            echo 
        "</td>			
    </tr>
    ";
    }
echo"
    </table>
    </div><br/><br/>
<div id='footer'>";include "../layout/footer.php";echo "</div>
</body>
</html>";
?>
