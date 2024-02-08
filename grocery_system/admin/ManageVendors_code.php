	<?php 
		
include '../grocery_connections.php';	
		
$qry="delete from vendor where vendor_id=		'".$_REQUEST['vendor_id']."'";			
	if (mysqli_query($conn, $qry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record deleted successfully');window.location='ManageVendors.php';</script>";
			
	}
			
	mysqli_close($conn);
			
?>