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
      <center> <h4><b><p style="color: green;"> Add New Categories</p></b></h4> </center><br>
  <form name='f1' method='post' action="NewCategories_code.php" enctype="multipart/form-data">
	
	<div class="row">
		<!--<div class="col-sm-6">
			<img src="images/66.png" width="100%" alt="add image path">
			<br><br>
		</div>
		<br><br>-->
		<div class="col-sm-6">
		 
		<div class='row'>
			<div class='col-md-6'>
				<label for='category_name'>Category Name</label>
				<textarea rows='3' class='form-control' id='category_name' placeholder='Category Name' name='category_name' required ></textarea>
			</div>
		</div>

		<br>
		<button type="submit" class="btn btn-default btn-success">Add Category</button>
		</div>
		<br><br><br>
	
	</div>
        
       
   
   </form>
</div>
		
		
</body>
</html>
