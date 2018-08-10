
<?php
	include_once 'header_1.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		
			<h2><font color="white">Public Form</font></h2>
		</font>
		<form class="signup-form" action="public_form.inc.php" method="POST">
			<input type="text" name="li_url" value="<?php echo $_GET['url'] ?>">&nbsp
			<input type="text" name="li_name" placeholder="Link Name*">&nbsp

	
  <input list="li_type" name="li_type" placeholder="Link Type*">
  <datalist id="li_type">
    <option value="Educational">
    <option value="Entertainment">
    <option value="News and Article">
  
  </datalist>



  				&nbsp
			
			<textarea type="textarea" name="feedback" placeholder="Description" rows="9" cols="52" form="signup-form"></textarea>&nbsp
			

			 <input list="rating" name="rating" placeholder="rating*">
  <datalist id="rating">
    <option value="5">
    <option value="4">
    <option value="3">
    <option value="2">
    <option value="1">

  
  </datalist>

			<button type="submit" name="submit">Submit</button>
			
		</form>
	
	</div>
</section>
