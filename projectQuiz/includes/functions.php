<?php
 
function log_in($username, $password) {
        mysql_query("SET NAMES utf8");
        $query = "SELECT * from user WHERE username='".$username."' AND password='".$password."' LIMIT 1";
        $result = mysql_query($query) or die(mysql_error());
        $num_rows = mysql_num_rows($result);
        if ($num_rows == 1) {
            $user = mysql_fetch_array($result);
            session_start();
            $_SESSION["username"] = $user["username"];
            $_SESSION["id"] = $user["id"];
            $_SESSION["role"]=$user["role"];
            return true;
        } else {
            return false;
        }

}

function check_role($rol){
        if(!isset($_SESSION["username"]) || $_SESSION["role"]<$rol){
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
function user_exist($username){
        mysql_query("SET NAMES utf8");
        $query = "SELECT * from user WHERE username='".$username."' LIMIT 1";
        $result = mysql_query($query) or die(mysql_error());
        $num_rows = mysql_num_rows($result);
        if ($num_rows == 1) {
            return true;
        } else {
            return false;
        }
    
}

function check_ans($id, $coran) {
        mysql_query("SET NAMES utf8");
        $query = ("SELECT * FROM questions WHERE ID='".$id."' and corans='".$coran."'");
        $result = mysql_query($query) or die(mysql_error());
        $num_rows = mysql_num_rows($result);
        if ($num_rows == 1) {
            return true;
        } else {
            return false;
        }

}

function logout(){
         session_start();
        if(isset($_SESSION["username"])){
            session_destroy();
         return true;
        }
        return false; 
}
  

?>