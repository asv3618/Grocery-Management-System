<?php session_start(); ?>
<html lang="en">
<head>
   <?php
	include 'groceryfiles/groceryfiles.php';
  ?>
  
</head>
<body >

<?php 
include 'Admin_Home_Menu.php';
 ?><br>
<section >
    <div class="container card" style="background-color:#D5DBDB"><br>
        <div class="row">
           
		   
		   <div class="row">
		<!--<div class="col-sm-4"><br>
			<img src="images/.jpg" width="100%" alt="add image path">
			<br><br>
		</div>-->
		   
		   
            <div class="col-md-8">
                <center><h4><b><p style="color: green;"> Add New Vendors</p></b></h4></center>
               <form name='f1' method='post' action="NewVandors_code.php" enctype="multipart/form-data">
   
					
<div class='row'>
	<div class='col-md-4'>
		<label for='vendor_name'>Vendor Name</label>
		<input type='text' class='form-control' id='vendor_name' placeholder='Vendor Name' name='vendor_name' required >
	</div>
	<div class='col-md-4'>
		<label for='mobile'>Mobile Number</label>
		<input type='text' class='form-control' id='mobile' placeholder='Mobile' name='mobile' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-4'>
		<label for='email'>Email</label>
		<input type='email' class='form-control' id='email' placeholder='Email' name='email' required >
	</div>
	<div class='col-md-4'>
		<label for='address'>Address</label>
		<textarea rows='3' class='form-control' id='address' placeholder='Address' name='address' required ></textarea>
	</div>
</div>
<div class='row'>
	<div class='col-md-4'>
		<label for='supplies'>Supplies</label>
		<input type='text' class='form-control' id='supplies' placeholder='Supplies' name='supplies' required >
	</div>
</div>	
					<br>
                    <div class="form-row">
                           <center><input  type="submit" name="submit" class="btn btn-success" value="Add Vendor"></center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
		
</body>
</html>
