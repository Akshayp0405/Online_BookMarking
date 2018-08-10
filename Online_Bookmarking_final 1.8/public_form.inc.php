	<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';

	$li_url = mysqli_real_escape_string($conn, $_POST['li_url']);
	$li_name = mysqli_real_escape_string($conn, $_POST['li_name']);
	$li_type= mysqli_real_escape_string($conn, $_POST['li_type']);
	$feedback = mysqli_real_escape_string($conn, $_POST['feedback']);
	$rating = mysqli_real_escape_string($conn, $_POST['rating']);


	//Error handlers
	//Check for empty fields
	if (empty($li_url) || empty($li_name) || empty($li_type) || empty($rating)) {
		header("Location: p1.php?p1=empty");
		
		exit();
	} 



          $sql = "INSERT INTO p1 (li_url,li_name,li_type, feedback, rating) VALUES ('$li_url', '$li_name', '$li_type', '$feedback', '$rating');";
          mysqli_query($conn, $sql);
          header("Location: public.php?=success");

      	exit();


}
 else {
		header("Location: p1=error");
	exit();
}
