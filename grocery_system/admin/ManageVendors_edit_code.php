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
        <center><h4><b><p style="color:green;"> Edit Vendors</p></b></h4></center>
        <form name='f1' method='post' action="#" enctype="">
    	    <div class="container">
                	<?php 
		
	include '../grocery_connections.php'; 
			
$qry="select vendor_id,vendor_name,mobile,email,address,supplies from vendor where vendor_id=		'".$_REQUEST['vendor_id']."'";
$rs=mysqli_query($conn, $qry);
if (mysqli_num_rows($rs) > 0) 
{
	$i=1;
	while($row = mysqli_fetch_assoc($rs))
		{
		echo "<div class='row'>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Vendor Id</label>";
		echo "<input type='text' class='form-control' name='vendor_id' value='".$row['vendor_id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Vendor Name</label>";
		echo "<input type='text' class='form-control' name='vendor_name' value='".$row['vendor_name']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Mobile</label>";
		echo "<input type='text' class='form-control' name='mobile' value='".$row['mobile']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Email</label>";
		echo "<input type='text' class='form-control' name='email' value='".$row['email']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Address</label>";
		echo "<input type='text' class='form-control' name='address' value='".$row['address']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Supplies</label>";
		echo "<input type='text' class='form-control' name='supplies' value='".$row['supplies']."'>";
		echo "</div>";
	echo "</div><hr></hr>";
		}
}
else
{

	
}

?>
            <br>
    	    <center><button type="submit" name='submit' class="btn btn-default btn-success">Edit</button><br><br></center>
       </form>
       
       <form name='f2' method='post' action='#'>
            			
	<?php
			if(isset($_REQUEST['submit']))
			{
				
			
	$updateqry="update vendor set vendor_id='".$_REQUEST['vendor_id']."' , vendor_name='".$_REQUEST['vendor_name']."' , mobile='".$_REQUEST['mobile']."' , email='".$_REQUEST['email']."' , address='".$_REQUEST['address']."' , supplies='".$_REQUEST['supplies']."'  where vendor_id='".$_REQUEST['vendor_id']."'";;
			
	if (mysqli_query($conn, $updateqry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record updated successfully');window.location='ManageVendors.php';</script>";
			
	}
			
}mysqli_close($conn);
?>
       </form>
    </div>
</body>
</html>
