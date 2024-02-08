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
 <div class="container card" style="background-color:#D5DBDB"><br>
  <center>   <h4><b><p style="color: green;">Add New Department</p></b></h4></center>
  <form name='f1' method='post' action="NewDepartment_code.php" enctype="multipart/form-data">
	
	<div class="row">
		<!--<div class="col-sm-6">
			<img src="images/.jpg" width="80%" alt="add image path"><br><br><br>
		</div>-->
		
		<div class="col-sm-6">
		 
<div class='row'>
	<div class='col-md-6'>
		<label for='department_name'>Department Name</label>
		<input type='text' class='form-control' id='department_name' placeholder='Department Name' name='department_name' required >
	</div>
	<div class='col-md-6'>
		<label for='designation'>Designation</label>
		<input type='text' class='form-control' id='designation' placeholder='Designation' name='designation' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<label for='salary'>Salary</label>
		<input type='text' class='form-control' id='salary' placeholder='Salary' name='salary' required >
	</div>
</div>

		<br>
		<center><button type="submit" class="btn btn-default btn-success">Add Dept</button><br><br></center>
		</div>
		<br>
	
	</div>
        
       
   
   </form>
</div>
		
		
</body>
</html>
