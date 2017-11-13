<?php 


if (isset($_POST['submit'])) {

  include 'db.php';

  $uid = mysqli_real_escape_string($conn, $_POST['user_uid']);
  $first_name = mysqli_real_escape_string($conn, $_POST['user_first']);
  $last_name = mysqli_real_escape_string($conn, $_POST['user_last']);
  $email = mysqli_real_escape_string($conn, $_POST['user_email']);
  $password = mysqli_real_escape_string($conn, $_POST['pwd']);



  // Error Handling

  // check for empty fields

  if (empty($_POST['user_uid']) || empty($_POST['user_first']) || empty($_POST['user_last']) || empty($_POST['user_email']) || empty($_POST['pwd']) ) {
  	   header("location: ../signup.php?signup=empty_fields");
  	   exit();
  }else{

    // check exiting user name in database
    $check_data = "SELECT user_uid FROM register_user WHERE user_uid = '$uid';";
    $check_data_result = mysqli_query($conn, $check_data);

    if (mysqli_affected_rows($conn) > 0) {
    	echo "user already exited";
    	header("location: ../signup.php?signup=user_exit");
    	exit();
    }
  }
   





  $query = "INSERT INTO register_user (user_first_name, user_last_name, user_email_id, user_uid, user_password) VALUES('$first_name', '$last_name', '$email', '$uid', '$password');";

   mysqli_query($conn, $query);
  
  header("location: ../signup.php?signup=successful");
  exit();
	
}



















 ?>