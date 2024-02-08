<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body style="background-color: #ffffff;background-image: url(images/)">

<?php 
include 'Admin_Home_Menu.php';
 ?>
    <div class="container" style="background-color: #D5DBDB">
		<center><h3><b><p style="color:green;"> Edit Products</p></b></h3></center>
        <form name='f1' method='post' action="#" enctype="">
    	    <div class="container">
                	<?php 
		
$dbhost = 'localhost';
         
$dbuser = 'root';
         
$dbpass = '';
		 
$dbname = 'groceriesdb';
         
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
         
if(! $conn )
		 
{
            
	die('Could not connect: ' . mysqli_error());
          
}
			
			
			
$qry="select product_id,category_name,product_name,description,price,product_pic,reward_points,stock_quantity from product where product_id=		'".$_REQUEST['product_id']."'";
$rs=mysqli_query($conn, $qry);
if (mysqli_num_rows($rs) > 0) 
{
	$i=1;
	while($row = mysqli_fetch_assoc($rs))
		{
		echo "<div class='row'>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Product Id</label>";
		echo "<input type='text' class='form-control' name='product_id' value='".$row['product_id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Category Name</label>";
		echo "<input type='text' class='form-control' name='category_name' value='".$row['category_name']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Product Name</label>";
		echo "<input type='text' class='form-control' name='product_name' value='".$row['product_name']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Description</label>";
		echo "<input type='text' class='form-control' name='description' value='".$row['description']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Price</label>";
		echo "<input type='text' class='form-control' name='price' value='".$row['price']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Product Pic</label>";
		echo "<input type='text' class='form-control' name='product_pic' value='".$row['product_pic']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Reward Points</label>";
		echo "<input type='text' class='form-control' name='reward_points' value='".$row['reward_points']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Stock Quantity</label>";
		echo "<input type='text' class='form-control' name='stock_quantity' value='".$row['stock_quantity']."'>";
		echo "</div>";
	echo "</div><hr></hr>";
		}
}
else
{

	echo "<h1>Records Not Found</h1>";
}

?>
            <br>
    	    <center><button type="submit" name='submit' class="btn btn-default btn-success">Submit</button></center>
       </form>
       
       <form name='f2' method='post' action='#'>
            			
	<?php
			if(isset($_REQUEST['submit']))
			{
				
			
	$updateqry="update product set product_id='".$_REQUEST['product_id']."' , category_name='".$_REQUEST['category_name']."' , product_name='".$_REQUEST['product_name']."' , description='".$_REQUEST['description']."' , price='".$_REQUEST['price']."' , product_pic='".$_REQUEST['product_pic']."' , reward_points='".$_REQUEST['reward_points']."' , stock_quantity='".$_REQUEST['stock_quantity']."'  where product_id='".$_REQUEST['product_id']."'";;
			
	if (mysqli_query($conn, $updateqry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record updated successfully');window.location='ManageProducts.php';</script>";
			
	}
			
}mysqli_close($conn);
?>
       </form>
    </div>
</body>
</html>
