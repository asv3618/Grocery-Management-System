	<?php 
		
include '../grocery_connections.php';		
			
			
$qry="delete from department where department_id=		'".$_REQUEST['department_id']."'";			
	if (mysqli_query($conn, $qry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record deleted successfully');window.location='ManageDepartment.php';</script>";
			
	}
			
	mysqli_close($conn);
			
?>