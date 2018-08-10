<?php
	include_once 'header.php';

?>

<section class="main-container">
	<div class="main-wrapper">
		<center><img src="images/logo.png" width="300" height="300"></center>
		<h2><font color="white">Online Boo<img src="images/k1.png" width="30px" height="40px">marking</font></h2>
		<?php
			// echo session_id();
			if (isset($_SESSION['u_id'])) {
			
				header("Location: front.php");
				exit();
			}
		?>
	</div>
</section>

<?php
	include_once 'footer.php';
?>

<?php  
include 'footer.php';
?>