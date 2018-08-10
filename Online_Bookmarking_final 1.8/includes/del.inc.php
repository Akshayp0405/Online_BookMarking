<?php 
	//include 'res.inc.php';
	include_once 'dbh.inc.php';
	session_start();
	$uid=$_SESSION['u_uid'];

	$sql="DELETE from ".$uid." where link_id='".$_GET['del_id']."'";
	$query=mysqli_query($conn,$sql) or die($sql);
	header("Location: ../bookmark.php");

 ?>