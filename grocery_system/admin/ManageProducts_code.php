	<?php 
		
include '../grocery_connections.php';		
			
$qry="delete from product where product_id=		'".$_REQUEST['product_id']."'";			
	if (mysqli_query($conn, $qry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record deleted successfully');window.location='ManageProducts.php';</script>";
			
	}
			
	mysqli_close($conn);
			
?>