<?php 

	include 'private.header.php';
	include 'includes/res.inc.php';
	include_once 'includes/dbh.inc.php';

	$uid=$_SESSION['u_uid'];
 ?>


<link rel="stylesheet" type="text/css" href="css/private.bookmark.css">
<head>
	<br>
	<center>	
	<h2><font color="white"><h1><b>Favourites</b></h1></font></h2>	</center><br>

	<?php 
		$sql="select * from ".$uid.";";
			
			if($result = mysqli_query($conn, $sql)){

 				if(mysqli_num_rows($result) > 0){
	
					while ($row=mysqli_fetch_array($result)) {
			# code...
	?>
						<div class="bookmark">
							<div class="well">
							<h3>
							<?php  
								echo $row[1];?>
								<a class="btn btn-default" name="visit" target="_blank" href="<?php echo $row[2] ?>">Visit</a>
								<a class="btn btn-default" onclick="deleteme(<?php echo $row[0]; ?>)" name="delete">Delete</a>
								<a class="btn btn-danger" href="p1.php?url=<?php echo $row[2] ?>" name="delete">Publish</a>
							</h3>
							</div>
						</div>

						<script type="text/javascript">
							function deleteme(delid) {
						// body...
								if (confirm("Do you want to delete")) {
									window.location.href='includes/del.inc.php?del_id='+delid+'';
									return true;
								}
								function sendUrl(url) {
						// body...
								window.location.href='../public/p1.php?url='+url+'';
								return true;
							}
						}

						</script>

	<?php 

			}
		}
	}
	else {
	# code...
		echo "nothing is enterd";
	}
	?>

</head>

		
