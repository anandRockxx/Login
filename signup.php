<?php 
include_once 'header.php';
?>


<div class="sign_up_form">
	
	<h4>Sign Up</h4>

	<div class="form-container">
		
		<form action="account/signup.php" method="post">

		<input id="user" type="text" name="user_uid" placeholder="Username">
		<br>
		<input id="first_name" type="text" name="user_first" placeholder="First Name">
		<br>
		<input id="last_name" type="text" name="user_last" placeholder="Last Name">
		<br>
		<input id="email_id" type="text" name="user_email" placeholder="Email">
		<br>
		<input id="user_password" type="password" name="pwd" placeholder="Password">
		<br>
		<button id="sub-btn" type="submit" name="submit">sign up</button>

		<div id="result"></div>
		</form>
	</div>
</div>

<?php 
include_once 'footer.php';
?>
