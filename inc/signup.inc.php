<?php 


if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$uid = mysql_real_escape_string($conn, $_POST['user_uid']);
	$first = mysql_real_escape_string($conn, $_POST['user_first']);
	$last = mysql_real_escape_string($conn, $_POST['user_last']);
	$email = mysql_real_escape_string($conn, $_POST['user_email']);
	$pwd = mysql_real_escape_string($conn, $_POST['pwd']);

	// Error Handlers

	// checkfor empty filds

	if (empty($uid) || empty($first) || empty($last) || empty($email) || empty($pwd)) {
				header("location: ../signup.php?signup=empty");
				exit();	
	}
	else{


		// check input characters are valid.
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			    header("location: ../signup.php?signup=invalid");
				exit();
		}
		esle{

			// check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("location: ../signup.php?signup=email");
				exit();
			}
			else{
				$sql = "SELECT * FROM  register_user WHERE user_uid = '$uid'";
				$result = mysql_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("location: ../signup.php?signup=userExit");
					exit();
				}
				else{
					// hashing a password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

					// insert the user into the database
					$sql ="INSERT INTO register_user (user_first_name, user_last_name, user_email_id, user_uid, user_password) VALUES ('$first, $last, $email, $email, $hashedPwd');";

					$result = mysql_query($conn, $sql);
					header("location: ../signup.php?signup=success");
				    exit();
				}
			}
		}
	}

}


else{
	header("location: ../signup.php");
	exit();
}


 ?>