<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
	include 'groceryfiles/groceryfiles.php';
  ?>
</head>
<!--<body class='bg' style="background-color:# ;background-image: url(images/.jpg)">-->

<?php 
include 'Admin_Home_Menu.php';
 ?><br>
    <div class="container card" style="background-color:#D5DBDB"><br>
        <center><h4><b><p style="color: green;"> Edit Rewards</p></b></h4></center>
        <form name='f1' method='post' action="#" enctype="">
    	    <div class="container">
                	<?php 
		
include '../grocery_connections.php'; 
$qry="select reward_id,customer_id,order_no,reward_points from rewards where reward_id=		'".$_REQUEST['reward_id']."'";
$rs=mysqli_query($conn, $qry);
if (mysqli_num_rows($rs) > 0) 
{
	$i=1;
	while($row = mysqli_fetch_assoc($rs))
		{
		echo "<div class='row'>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Reward Id</label>";
		echo "<input type='text' class='form-control' name='reward_id' value='".$row['reward_id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Customer Id</label>";
		echo "<input type='text' class='form-control' name='customer_id' value='".$row['customer_id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Order No</label>";
		echo "<input type='text' class='form-control' name='order_no' value='".$row['order_no']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Reward Points</label>";
		echo "<input type='text' class='form-control' name='reward_points' value='".$row['reward_points']."'>";
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
    	    <center><button type="submit" name='submit' class="btn btn-default btn-success">Submit</button><br><br></center>
       </form>
       
       <form name='f2' method='post' action='#'>
            			
	<?php
			if(isset($_REQUEST['submit']))
			{
				
			
	$updateqry="update rewards set reward_id='".$_REQUEST['reward_id']."' , customer_id='".$_REQUEST['customer_id']."' , order_no='".$_REQUEST['order_no']."' , reward_points='".$_REQUEST['reward_points']."'  where reward_id='".$_REQUEST['reward_id']."'";;
			
	if (mysqli_query($conn, $updateqry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record updated successfully');window.location='ManageRewards.php';</script>";
			
	}
			
}mysqli_close($conn);
?>
       </form>
    </div>
</body>
</html>
