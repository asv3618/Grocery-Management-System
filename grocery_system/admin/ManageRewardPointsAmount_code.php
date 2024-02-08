	<?php 
		
include '../grocery_connections.php';	
$qry="delete from reward_points_amount where points_id=		'".$_REQUEST['points_id']."'";			
	if (mysqli_query($conn, $qry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record deleted successfully');window.location='ManageRewardPointsAmount.php';</script>";
			
	}
			
	mysqli_close($conn);
			
?>