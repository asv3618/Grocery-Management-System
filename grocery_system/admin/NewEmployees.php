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
 ?><br>
  
  <div class="container card" style="background-color:#D5DBDB"><br>
 <center>     <h4><b><p style="color: green;"> Add New Employee</p></b></h4></center>
  <form name='f1' method='post' action="NewEmployees_code.php" enctype="multipart/form-data">
	
	<div class="row">
		<!--<div class="col-sm-6"><br>
			<img src="images/.jpg" width="90%" alt="add image path">
		</div>-->
		
		<div class="col-sm-6">
		 

<div class='row'>
	<div class='col-md-6'>
		<label for='first_name'>First Name</label>
		<input type='text' class='form-control' id='first_name' placeholder='First Name' name='first_name' required >
	</div>
	<div class='col-md-6'>
		<label for='last_name'>Last Name</label>
		<input type='text' class='form-control' id='last_name' placeholder='Last Name' name='last_name' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<label for='gender'>Gender</label>
		<select class='form-control' id='gender' name='gender' required >
		<option>--Select--</option>
		<option>Male</option>
		<option>Female</option>
		</select>
	</div>
	<div class='col-md-6'>
		<label for='age'>Age</label>
		<input type='number' class='form-control' id='age' placeholder='Age' name='age' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<label for='mobile'>Mobile Number`</label>
		<input type='number' class='form-control' id='mobile' placeholder='Mobile' name='mobile' required >
	</div>
	<div class='col-md-6'>
		<label for='email'>E-Mail</label>
		<input type='email' class='form-control' id='email' placeholder='Email' name='email' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<label for='address'>Address</label>
		<textarea rows='3' class='form-control' id='address' placeholder='Address' name='address' required ></textarea>
	</div>
	<div class='col-md-6'>
		<label for='emp_pic'>Employee Photo</label>
		<input type='file' class='form-control' id='emp_pic' placeholder='Emp Pic' name='emp_pic' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<label for='department_id'>Department Id</label>
		<select class='form-control' id='department_id' name='department_id' required >
	<?php $qry='select distinct department_id from department';
	$rs = mysqli_query($conn, $qry);
	while($row = mysqli_fetch_assoc($rs)) 
	{
		$value=$row['department_id'];
		echo "<option>$value</option>";
	}
?>
		</select>
	</div>
	<div class='col-md-6'>
		<label for='role'>Role</label>
		<input type='text' class='form-control' id='role' placeholder='Role' name='role' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<label for='password'>Password</label>
		<input type='password' class='form-control' id='password' placeholder='Password' name='password' required >
	</div>
</div>

		<br>
		<center><button type="submit" class="btn btn-default btn-success">Add Employee</button><br><br></center>
		</div>
		<br>
	
	</div>
        
       
   
   </form>
</div>
		
		
</body>
</html>
