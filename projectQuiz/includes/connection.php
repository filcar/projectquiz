<?php

/**************************/
/* Σύνδεση με Εξυπηρετητή */
/**************************/
$link = mysql_connect("localhost", "root", "");
if(!$link)
{
	die("Could not connect to host");
}
/*echo "Connected successfully to host\n\n";*/

/***********************************************/
/* Για να βλέπουμε Ελληνικά στη βάση δεδομένων */
/***********************************************/
mysql_query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");

/*****************************/
/* Σύνδεση με Βάση Δεδομένων */
/*****************************/
$seldb = mysql_select_db("3724_3725_3726");
if(!$seldb)
{
	die("Could not connect to database");
}
/*echo "Connected successfully to database\n\n";*/

?>