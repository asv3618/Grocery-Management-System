<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
	include 'groceryfiles/groceryfiles.php';
  ?>
</head>
<body>

<?php 
include 'Home_Menu.php';
 ?><br>
<div class="container card" style="background-color: #ffffff;margin-top:20px;width:50%" >
  <center> <h4><b><p style="color: black;"> New Customer Registration</p></b></h4> </center>
  <form name='f1' method='post' action="Customer_New_Registration_code.php" enctype="multipart/form-data">
	      
        
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
		<label for='mobile'>Mobile Number</label>
		<input type='text' class='form-control' id='mobile' placeholder='Mobile' name='mobile' required >
	</div>
	<div class='col-md-6'>
		<label for='email'>Email</label>
		<input type='email' class='form-control' id='email' placeholder='Email' name='email' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<label for='address'>Address</label>
		<textarea rows='3' class='form-control' id='address' placeholder='Address' name='address' required ></textarea>
	</div>
	<div class='col-md-6'>
		<label for='customer_pic'>Customer Photo</label>
		<input type='file' class='form-control' id='customer_pic' placeholder='Customer Pic' name='customer_pic' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<label for='password'>Password</label>
		<input type='password' class='form-control' id='password' placeholder='Password' name='password' required >
	</div>
	<div class='col-md-6'>
		<label for='cpassword'>Confirm-Password</label>
		<input type='password' class='form-control' id='cpassword' placeholder='Confirm-Password' name='cpassword' onfocusout='Validate()'required >
		</div>
</div>
   <br>
	<center><button type="submit" class="btn btn-default btn-success">Register</button><br><br></center>
   </form>
</div>
		
		
</body>
</html>
