<?php 

include_once 'header.php';
include_once 'footer.php';
 ?>


<div class="sign_up_form">
	
	<h4>Sign Up</h4>

	<div class="form-container">
		
		<form action="inc/signup.php" method="post">
		<input type="text" name="user_uid" placeholder="Username">
		<br>
		<input type="text" name="user_first" placeholder="First Name">
		<br>
		<input type="text" name="user_last" placeholder="Last Name">
		<br>
		<input type="text" name="user_email" placeholder="Email">
		<br>
		<input type="password" name="pwd" placeholder="Password">
		<br>
		<button type="submit" name="submit">sign up</button>
		</form>
	</div>
</div>


