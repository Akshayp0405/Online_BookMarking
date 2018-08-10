
<?php
	include_once 'header_signup.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<center>
			
		</font>
		<img src="sign up logo1.png" align="middle" height="200px" > </center>
		
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder="Firstname">
			<input type="text" name="last" placeholder="Lastname">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Sign up</button>
		</form>
	
	</div>
</section>

<?php
	include_once 'footer.php';
?>