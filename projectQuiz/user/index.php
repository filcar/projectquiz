<?php
include_once("../includes/functions.php");
session_start();
check_role("0");
 //echo $_SERVER['HTTP_USER_AGENT'];

echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta charset='utf-8' />

</head>
<body>


<h1>Καλώς ήρθατε στο Μαθηματικό Quiz μας</h1>
<h2>Επιλέξτε μία από τις παρακάτω θεματικές ενότητες</h2>
<form method='post' action='questions.php'>
	
	Ενότητα: <select name='epilogi'>
		<option value='alg_a'>Αλγεβρα Α' Λυκείου </option>
		<option value='geo_a'>Γεωμετρία Α' Λυκείου </option>
		<option value='alg_b'>Αλγεβρα Β' Λυκείου </option>
		<option value='geo_b'>Γεωμετρία Β' Λυκείου </option>
		<option value='math_b'>Μαθηματικά Κατεύθυνσης Β' Λυκείου </option>
		<option value='math_c'>Μαθηματικά Κατεύθυνσης Γ' Λυκείου </option>
		<option value='stat_c'>Στατιστική Γ' Λυκείου</option>
	</select>
	<br /><br /> <br /><br /> <br /><br /> <br /><br />
	<input type='submit' value='Πάτησε για να δεις τις ερωτήσεις' />
</form>

</body>
</html>
";

?>
