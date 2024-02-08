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
      <center> <h4><b><p style="color: green;"> Add New Inventory</p></b></h4> </center><br>
  <form name='f1' method='post' action="NewInventory_code.php" enctype="multipart/form-data">
	
	<div class="row">
		<div class="col-sm-6">
			<img src="images/inv.jpg" width="90%" alt="add image path"><br><br><br>
		</div>
		
		<div class="col-sm-6">
		 
<div class='row'>
	<div class='col-md-6'>
		<label for='product_id'>Product Id</label>
		<select class='form-control' id='product_id' name='product_id' required >
	<?php $qry='select distinct product_id from product';
	$rs = mysqli_query($conn, $qry);
	while($row = mysqli_fetch_assoc($rs)) 
	{
		$value=$row['product_id'];
		echo "<option>$value</option>";
	}
?>
		</select>
	</div>
	<div class='col-md-6'>
		<label for='vendor_id'>Vendor Id</label>
		<select class='form-control' id='vendor_id' name='vendor_id' required >
	<?php $qry='select distinct vendor_id from vendor';
	$rs = mysqli_query($conn, $qry);
	while($row = mysqli_fetch_assoc($rs)) 
	{
		$value=$row['vendor_id'];
		echo "<option>$value</option>";
	}
?>
		</select>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<label for='stock_quantity'>Stock Quantity</label>
		<input type='number' name='stock_quantity' class='form-control'>
	</div>
	<div class='col-md-6'>
		<label for='restock_date'>Restock Date</label>
		<input type='date' class='form-control' id='restock_date' placeholder='Restock Date' name='restock_date' required >
	</div>
</div>

		<br>
		<center><button type="submit" class="btn btn-default btn-success">Add Inventory</button><br><br></center>
		</div>
		<br>
	
	</div>
        
       
   
   </form>
</div>
		
		
</body>
</html>
