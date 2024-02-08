	<?php 
		
include '../grocery_connections.php';	
			
			
$qry="delete from store where store_Id=		'".$_REQUEST['store_Id']."'";			
	if (mysqli_query($conn, $qry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record deleted successfully');window.location='ManageStore.php';</script>";
			
	}
			
	mysqli_close($conn);
			
?>