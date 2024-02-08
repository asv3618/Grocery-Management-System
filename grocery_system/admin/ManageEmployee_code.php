	<?php 
		
include '../grocery_connections.php'; 		
			
$qry="delete from employee where employee_id=		'".$_REQUEST['employee_id']."'";			
	if (mysqli_query($conn, $qry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record deleted successfully');window.location='ManageEmployee.php';</script>";
			
	}
			
	mysqli_close($conn);
			
?>