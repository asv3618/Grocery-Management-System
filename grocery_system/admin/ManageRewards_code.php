	<?php 
		
include '../grocery_connections.php';		
			
$qry="delete from rewards where reward_id=		'".$_REQUEST['reward_id']."'";			
	if (mysqli_query($conn, $qry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record deleted successfully');window.location='ManageRewards.php';</script>";
			
	}
			
	mysqli_close($conn);
			
?>