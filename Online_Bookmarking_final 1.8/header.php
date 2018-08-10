<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php"><img src="images/home.png"  width="50px" height="40px"></a>Home</li>
			</ul>
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>
						<form action="includes/back.inc.php" method="POST">
							<button type="submit" name="back">Private</button>
						</form>

						<form action="includes/public.inc.php" method="POST">
							<button type="public" name="back">Public</button>
						</form>
								';
					} else {
						echo '<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-mail">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">Login</button>
						</form>
						<a href="signup.php">Sign up</a>';
					}
				?>
			</div>
		</div>
	</nav>
</header>