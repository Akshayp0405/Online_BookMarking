<?php
	include_once 'header_public.php';
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="public_style.css">
</head>
<body>
<section class="main-wrapper">
	<div class="main-container">
		<center><br>
			<h2><font color="white"><b>Public Forum</b></font></h2>
		</center>
		</font>
		<br>	
		<form class="signup-form"  method="POST">
			<div class="gallery">
			<img src="edu.png" height="200" width="200">
			<div class="s1">
			<button  type="submit" name="educational" formaction="public_edu.inc.php">
			<b>Educational </b></button>
		</div>
			
			</div>

			<div class="gallery">
				<div class="g2">
					<img src="enter.png" height="170" width="200" >
				</div>
			<div class="s2">
			<button  type="submit" name="entertainment" formaction="public_enter.inc.php"><b>Entertainment</b> </button>
		</div>
			</div>

			<div class="gallery">
				<div class="g3">
					<img src="news.png" height="150" width="150">
				</div>
			<div class="s3">
			<button type="submit" name="news" formaction="public_news.inc.php"><b>News and Article </b></button>
		</div>
			</div>
			

		</form>
</div>
</section>
</body>
</html>




