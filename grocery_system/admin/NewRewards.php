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
    <div class="container card" style="background-color:#D5DBDB"><br><br>
        <div class="row">
		
		
		<div class="row">

		<!--<div class="col-sm-4"><br><br>
			<img src="images/.jpg" width="100%" alt="add image path">
			<br><br>
		</div>-->
                      <div class="col-md-8"><br>
                <center><h4><b><p style="color: green;"> Add New Rewards</p></b></h4></center>
               <form name='f1' method='post' action="NewRewards_code.php" enctype="multipart/form-data">
					
					
					
					
					
					<div class='row'>
						<div class='col-md-6'>
							<label for='customer_id'>Customer Id</label>
							<input type='text' class='form-control' id='customer_id' placeholder='Customer Id' name='customer_id' required >
						</div>
					</div>
					<div class='row'>
						<div class='col-md-6'>
							<label for='order_no'>Order No</label>
							<input type='text' class='form-control' id='order_no' placeholder='Order No' name='order_no' required >
						</div>
					</div>
					<div class='row'>
						<div class='col-md-6'>
							<label for='reward_points'>Reward Points</label>
							<input type='text' class='form-control' id='reward_points' placeholder='Reward Points' name='reward_points' required >
						</div>
					</div>
					
                 
					<div class='col-md-2'>
					  <br>
					   <center><input   type="submit" name="submit" class="btn btn-success form-control" value="Add"></center>
					</div>
                    </div>
                </form>
            </div>
        </div>
    
</section>
		
</body>
</html>
