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
   <div class="container card" style="background-color:#D5DBDB"><br>
      <center><h4><b><p style="color: green;"> Edit Inventory</p></b></h4><br><center>
        <form name='f1' method='post' action="#" enctype="">
    	    <div class="container">
                	<?php 
$qry="select inventory_id,product_id,vendor_id,stock_quantity,restock_date from inventory where inventory_id=		'".$_REQUEST['inventory_id']."'";
$rs=mysqli_query($conn, $qry);
if (mysqli_num_rows($rs) > 0) 
{
	$i=1;
	while($row = mysqli_fetch_assoc($rs))
		{
		echo "<div class='row'>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Inventory Id</label>";
		echo "<input type='text' class='form-control' name='inventory_id' value='".$row['inventory_id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Product Id</label>";
		echo "<input type='text' class='form-control' name='product_id' value='".$row['product_id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Vendor Id</label>";
		echo "<input type='text' class='form-control' name='vendor_id' value='".$row['vendor_id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Stock Quantity</label>";
		echo "<input type='text' class='form-control' name='stock_quantity' value='".$row['stock_quantity']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Restock Date</label>";
		echo "<input type='text' class='form-control' name='restock_date' value='".$row['restock_date']."'>";
		echo "</div>";
	echo "</div><hr></hr>";
		}
}
else
{

	
}

?>
            <br>
    	    <center><button type="submit" name='submit' class="btn btn-default btn-success">Submit</button><br><br><br></center>
       </form>
       
       <form name='f2' method='post' action='#'>
            			
	<?php
			if(isset($_REQUEST['submit']))
			{
				
			
	$updateqry="update inventory set inventory_id='".$_REQUEST['inventory_id']."' , product_id='".$_REQUEST['product_id']."' , vendor_id='".$_REQUEST['vendor_id']."' , stock_quantity='".$_REQUEST['stock_quantity']."' , restock_date='".$_REQUEST['restock_date']."'  where inventory_id='".$_REQUEST['inventory_id']."'";;
			
	if (mysqli_query($conn, $updateqry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record updated successfully');window.location='ManageInventory.php';</script>";
			
	}
			
}mysqli_close($conn);
?>
       </form>
    </div>
</body>
</html>
