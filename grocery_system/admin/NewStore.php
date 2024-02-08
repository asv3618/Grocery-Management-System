<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
	include 'groceryfiles/groceryfiles.php';
	include '../grocery_connections.php';
  ?>
</head>
<body>

<?php 
include 'Admin_Home_Menu.php';
 ?>
<br>
  
  <div class="container card" style="background-color:#D5DBDB"><br><br>
      <center>   <h4><b><p style="color: green;"> Add New Stores</p></b></h4> </center>
  <form name='f1' method='post' action="NewStore_code.php" enctype="multipart/form-data">
	
	<div class="row">
		<!--<div class="col-sm-6">
			<img src="images/.jpg" width="100%" alt="add image path"><br><br><br>
		</div>-->
		
		<div class="col-sm-5">
		 
<div class='row'>
	<div class='col-md-5'>
		<label for='store_name'>Store Name</label>
		<input type='text' class='form-control' id='store_name' placeholder='Store Name' name='store_name' required >
	</div>
	<div class='col-md-5'>
		<label for='location'>Location</label>
		<input type='text' class='form-control' id='location' placeholder='Location' name='location' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-5'>
		<label for='mobile'>Mobile</label>
		<input type='text' class='form-control' id='mobile' placeholder='Mobile' name='mobile' required >
	</div>
</div>

		<br>
		<center><button type="submit" class="btn btn-default btn-success">Add Store</button></center>
		</div>
		<br>
	
	</div>
        
       
   
   </form>
</div>
		
		
</body>
</html>
