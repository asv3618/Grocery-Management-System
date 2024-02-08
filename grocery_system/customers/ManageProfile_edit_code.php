<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
	include 'groceryfiles/groceryfiles.php';
	include '../grocery_connections.php'; 
  ?>
</head>
<body">

<?php 
include 'Customers_Home_Menu.php';
 ?><br>
 
 <div class="container card" style="background-color:#D5DBDB"><br>
      <center><h4><b><p style="color: green;"> Edit Profile</p></b></h4> <br>
        <form name='f1' method='post' action="#" enctype="">
    	    <div class="container">
                	<?php 
		
	
			
			
$qry="select customer_id,first_name,last_name,mobile,email,address,customer_pic,password from customer where customer_id=		'".$_REQUEST['customer_id']."'";
$rs=mysqli_query($conn, $qry);
if (mysqli_num_rows($rs) > 0) 
{
	$i=1;
	while($row = mysqli_fetch_assoc($rs))
		{
		echo "<div class='row'>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Customer Id</label>";
		echo "<input type='text' class='form-control' name='customer_id' value='".$row['customer_id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>First Name</label>";
		echo "<input type='text' class='form-control' name='first_name' value='".$row['first_name']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Last Name</label>";
		echo "<input type='text' class='form-control' name='last_name' value='".$row['last_name']."'>";
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
		echo "<label class='form-check-label'>Customer Pic</label>";
		echo "<input type='text' class='form-control' name='customer_pic' value='".$row['customer_pic']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Password</label>";
		echo "<input type='text' class='form-control' name='password' value='".$row['password']."'>";
		echo "</div>";
	echo "</div><hr></hr>";
		}
}
else
{

	
}

?>
            <br>
    	    <button type="submit" name='submit' class="btn btn-default btn-success">Submit</button><br><br>
       </form>
       
       <form name='f2' method='post' action='#'>
            			
	<?php
			if(isset($_REQUEST['submit']))
			{
				
			
	$updateqry="update customer set customer_id='".$_REQUEST['customer_id']."' , first_name='".$_REQUEST['first_name']."' , last_name='".$_REQUEST['last_name']."' , mobile='".$_REQUEST['mobile']."' , email='".$_REQUEST['email']."' , address='".$_REQUEST['address']."' , customer_pic='".$_REQUEST['customer_pic']."' , password='".$_REQUEST['password']."'  where customer_id='".$_REQUEST['customer_id']."'";;
			
	if (mysqli_query($conn, $updateqry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record updated successfully');window.location='ManageProfile.php';</script>";
			
	}
			
}mysqli_close($conn);
?>
       </form>
    </div>
</body>
</html>
