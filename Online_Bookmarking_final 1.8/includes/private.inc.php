<?php 
//CODE FOR SAVE BUTTON STORE ALL TO DATABASE
session_start();
include 'dbh.inc.php';
//include 'res.inc.php';

//echo $uid;
$uid=$_SESSION['u_uid'];
if (isset($_POST['Save'])) {
	
	$sql = "CREATE TABLE ".$uid."(
	    link_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	    link_name VARCHAR(30) NOT NULL,
	    link_url VARCHAR(256) NOT NULL UNIQUE
		)";


	if(mysqli_query($conn, $sql))
	{
		echo "Table created successfully.";

		$link_name = mysqli_real_escape_string($conn, $_POST['linkName']);
		$link_url = mysqli_real_escape_string($conn, $_POST['linkUrl']);

		if (empty($link_name) || empty($link_url)) 
		{
			header("Location: ../private.php?textbox=empty");
			alert("feild should not be Empty");
			exit();
		}
		else
		{
			if (!filter_var($link_url, FILTER_VALIDATE_URL)) {
				header("Location: ../private.php?private=urliswrong");
				
				exit();
			} 
			else
			{
				$sql = "INSERT INTO ".$uid." (link_name, link_url) VALUES ('$link_name', '$link_url');";	
				mysqli_query($conn, $sql);
				header("Location: ../private.php?bookmark=success");

      
				exit();
			}
		}

	} 
	else
	{
		$link_name = mysqli_real_escape_string($conn, $_POST['linkName']);
		$link_url = mysqli_real_escape_string($conn, $_POST['linkUrl']);

		if (empty($link_name) || empty($link_url)) 
		{
			header("Location: ../private.php?textbox=empty");
			exit();
		}
		else
		{
			if (!filter_var($link_url, FILTER_VALIDATE_URL)) {
				header("Location: ../private.php?private=urliswrong");
				exit();
			} 
			else
			{
				$sql = "INSERT INTO ".$uid." (link_name, link_url) VALUES ('$link_name', '$link_url');";	
				mysqli_query($conn, $sql);
				header("Location: ../private.php?bookmark=success");
				exit();
			}
		}
    	
		header("Location: ../private.php?not_created");
		exit();
	}




	header("Location: ../private.php?nothinghappened");
	exit();
	# code...
}


//CODE FOR SHOW BUTTON RETRIVE DATA FROM DATABASE AND SHOW IT TO USER

elseif (isset($_POST['Show'])) {
	# code...
	header("Location: ../bookmark.php");
	exit();
}
	
 