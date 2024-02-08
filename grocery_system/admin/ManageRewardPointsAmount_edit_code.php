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
        <center><h4><b><p style="color:green;"> Edit Reward Points Amount</p></b></h4></center>
        <form name='f1' method='post' action="#" enctype="">
    	    <div class="container">
                	<?php 
		
include '../grocery_connections.php'; 	
			
$qry="select points_id,points,amount from reward_points_amount where points_id=		'".$_REQUEST['points_id']."'";
$rs=mysqli_query($conn, $qry);
if (mysqli_num_rows($rs) > 0) 
{
	$i=1;
	while($row = mysqli_fetch_assoc($rs))
		{
		echo "<div class='row'>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Points Id</label>";
		echo "<input type='text' class='form-control' name='points_id' value='".$row['points_id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Points</label>";
		echo "<input type='text' class='form-control' name='points' value='".$row['points']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Amount</label>";
		echo "<input type='text' class='form-control' name='amount' value='".$row['amount']."'>";
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
				
			
	$updateqry="update reward_points_amount set points_id='".$_REQUEST['points_id']."' , points='".$_REQUEST['points']."' , amount='".$_REQUEST['amount']."'  where points_id='".$_REQUEST['points_id']."'";;
			
	if (mysqli_query($conn, $updateqry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record updated successfully');window.location='ManageRewardPointsAmount.php';</script>";
			
	}
			
}mysqli_close($conn);
?>
       </form>
    </div>
</body>
</html>
