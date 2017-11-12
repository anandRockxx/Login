<?php 


if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$uid = mysql_real_escape_string($conn, $_POST['user_uid']);
	$first = mysql_real_escape_string($conn, $_POST['user_first']);
	$last = mysql_real_escape_string($conn, $_POST['user_last']);
	$email = mysql_real_escape_string($conn, $_POST['user_email']);
	$pwd = mysql_real_escape_string($conn, $_POST['pwd']);

}
else{
	header("location: ../signup.php");
	exit();
}


 ?>