	<?php 
		
include '../grocery_connections.php'; 
			
		
$qry="delete from salary where salary_id=		'".$_REQUEST['salary_id']."'";			
	if (mysqli_query($conn, $qry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record deleted successfully');window.location='ManageSalaries.php';</script>";
			
	}
			
	mysqli_close($conn);
			
?>