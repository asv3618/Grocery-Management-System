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
      <center> <h4><b><p style="color: green;"> Add New Products</p></b></h4> </center><br>
  <form name='f1' method='post' action="NewProducts_code.php" enctype="multipart/form-data">
	
	<div class="row">
		<!--<div class="col-sm-6">
			<img src="images/.jpg" width="90%" alt="add image path">
		</div>-->
		
		<div class="col-sm-6">
		 
<div class='row'>
	<div class='col-md-6'>
		<label for='category_name'>Category Name</label>
		<select class='form-control' id='category_name' name='category_name' required >
	<?php 
	$qry='select distinct category_name from category';
	$rs = mysqli_query($conn, $qry);
	while($row = mysqli_fetch_assoc($rs)) 
	{
		$value=$row['category_name'];
		echo "<option>$value</option>";
	}
?>
		</select>
	</div>
	<div class='col-md-6'>
		<label for='product_name'>Product Name</label>
		<input type='text' class='form-control' id='product_name' placeholder='Product Name' name='product_name' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<label for='description'>Description</label>
		<textarea rows='3' class='form-control' id='description' placeholder='Description' name='description' required ></textarea>
	</div>
	<div class='col-md-6'>
		<label for='price'>Price</label>
		<input type='number' class='form-control' id='price' placeholder='Price' name='price' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<label for='product_pic'>Product Picture</label>
		<input type='file' class='form-control' id='product_pic' placeholder='Product Pic' name='product_pic' required >
	</div>
	<div class='col-md-6'>
		<label for='reward_points'>Reward Points</label>
		<input type='number' class='form-control' id='reward_points' placeholder='Reward Points' name='reward_points' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<label for='stock_quantity'>Stock Quantity</label>
		<input type='number' class='form-control' id='stock_quantity' placeholder='Stock Quantity' name='stock_quantity' required >
	</div>
</div>

		<br>
		<center><button type="submit" class="btn btn-default btn-success">Add Product</button><br><br></center>
		</div>
		<br>
	
	</div>
        
       
   
   </form>
</div>
		
		
</body>
</html>
