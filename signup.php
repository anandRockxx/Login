<?php 

include_once 'header.php';
include_once 'footer.php';

 ?>


<div class="sign_up_form">
	
	<h4>Sign Up</h4>

	<div class="form-container">
		
		<form action="signup.inc.php" method="post">
		<input type="text" name="user_uid" placeholder="Username" required="true">
		<br>
		<input type="text" name="user_first" placeholder="First Name" required="true">
		<br>
		<input type="text" name="user_last" placeholder="Last Name" required="true">
		<br>
		<input type="text" name="user_email" placeholder="Email" required="true">
		<br>
		<input type="password" name="pwd" placeholder="Password" required="true">
		<br>
		<button type="submit" name="sign_up">sign up</button>
		</form>
	</div>
</div>


