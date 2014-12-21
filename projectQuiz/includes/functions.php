<?php
 
function log_in($username, $password) {
        mysql_query("SET NAMES utf8");
        $query = "SELECT * from user WHERE username='".$username."' AND password='".$password."' LIMIT 1";
        $result = mysql_query($query) or die(mysql_error());
        $num_rows = mysql_num_rows($result);
        if ($num_rows == 1) {
            $user = mysql_fetch_array($result);
            session_start();
            $_SESSION['username'] = $user['username'];
            $_SESSION['id'] = $user['id'];
            $_SESSION["role"]=$user["role"];
            return true;
        } else {
            return false;
        }

}

function check_role(){
        if($_SESSION[role]!=1){
            echo "<html>
                    <head> <meta charset='utf-8'/>
                    </head>
                    <body>";
            die ("<p>Η σελίδα δεν είναι διαθέσιμη.</p> <p>Ή δεν έχετε συνδεθεί ή δεν έχετε δικαιώματα πρόσβασης σε αυτήν την σελίδα</p>
                    <p>Παρακαλώ <a href='../index.php'>συνδεθείτε</a>.</p></body></html>");
            return;
        }
        return; 
}
?>