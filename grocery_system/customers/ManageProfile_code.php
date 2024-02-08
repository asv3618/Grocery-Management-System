	<?php 
		
include '../grocery_connections.php'; 
			
$qry="delete from customer where customer_id=		'".$_REQUEST['customer_id']."'";			
	if (mysqli_query($conn, $qry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record deleted successfully');window.location='ManageProfile.php';</script>";
			
	}
			
	mysqli_close($conn);
			
?>