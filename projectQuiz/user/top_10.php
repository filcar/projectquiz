<?php

require_once("../includes/connection.php");
include_once("../includes/functions.php");
session_start();
check_role(0) ;


echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org
                                            /TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8' />
    <link rel='stylesheet' type='text/css' href='../layout/main.css'>
</head>

<body>
    <div id='header'>Οι δέκα καλύτερες προσπάθειες</div>

    <div id='nav'></div>
<div id='menu'>";include ("../layout/menu.php");echo "</div>";
echo "<div id=section_user>
    <h2>Καταχωρημένες Κατηγορίες</h2>
<table class='kenter' border=1>
    <tr>
        <th>Ονοματεπώνυμο χρήστη</th>
        <th>Όνομα Κατηγορίας</th>
        <th>Βαθμολογία</th>
    </tr>";

    $query = mysql_query("SELECT username,fullname,`subject_name`,max(`score`) as max 
            FROM `scores`, `subjects`,user 
            where subjects.id=subject_ID and score>0 
            and username=scores.user_name 
            group by username,`subject_name` order by max DESC LIMIT 10");
    while($row = mysql_fetch_array($query))
    {
     echo" <tr>
        <td>".$row["fullname"]."</td>
        <td>".$row["subject_name"]."</td>
        <td>".$row["max"]."</td>
     </tr>";
	}
echo" </table></div>
<div id='footer'>";include "../layout/footer.php";echo "</div>

</body>
</html>";




?>