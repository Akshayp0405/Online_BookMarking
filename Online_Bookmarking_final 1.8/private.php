
<?php 
	include "private.header.php";
	
 ?>
 <body>
 	<form action="includes/private.inc.php"  method="post">
 		<br><br><br><br>  <br><br><br><br>
 		<div class="">
	 	<div  class="private">


	 		<label><font color="white" size="5px">Link Name</font></label><br>
	 		<input  class="form-control" type="text" name="linkName" id="lname"> 		
	 		<br>
	 		<label><font color="white" size="5px">Link URL</font></label>
	 		<input  class="form-control" type="text" name="linkUrl" id="lurl"> 		

	 		<br>
	 		<button name="Save" class="btn btn-primary" id="save">Save</button>&nbsp &nbsp 
	 		<button name="Show" class="btn btn-danger" id="show"> Show All Bookmarks</button>

	 

	 	</div>
	</div>	
 	</form>
 </body>

<?php  
	include 'footer.php';
?>