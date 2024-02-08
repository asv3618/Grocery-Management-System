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
include 'Admin_Home_Menu.php';
 ?><br>
  
 <div class="container card" style="background-color:#D5DBDB"><br>
   <center> <h4><b><p style="color: green;"> Add Reward Points Amount</p></b></h4></center>
  <form name='f1' method='post' action="NewRewardPointsAmount_code.php" enctype="multipart/form-data">
	
	<!--<div class="row">
		<div class="col-sm-6"><br>
			<img src="images/rew.jpg" width="100%" alt="add image path"><br><br>
		</div>
		
		<div class="col-sm-6">-->
		 
<div class='row'>
	<div class='col-md-6'>
		<label for='points'>Points</label>
		<input type='number' class='form-control' id='points' placeholder='Points' name='points' required >
	</div>
	<div class='col-md-6'>
		<label for='amount'>Amount</label>
		<input type='text' class='form-control' id='amount' placeholder='Amount' name='amount' required >
	</div>
</div>

		<br>
		<center><button type="submit" class="btn btn-default btn-success">Add Points</button><br><br></center>
		</div>
		<br>
	
	</div>
        
       
   
   </form>
</div>
		
		
</body>
</html>
