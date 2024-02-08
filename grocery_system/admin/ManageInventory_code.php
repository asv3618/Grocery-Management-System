	<?php 
		
$dbhost = 'localhost';
         
$dbuser = 'root';
         
$dbpass = '';
		 
$dbname = 'groceriesdb';
         
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
         
if(! $conn )
		 
{
            
	die('Could not connect: ' . mysqli_error());
          
}
			
			
			
$qry="delete from inventory where inventory_id=		'".$_REQUEST['inventory_id']."'";			
	if (mysqli_query($conn, $qry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record deleted successfully');window.location='ManageInventory.php';</script>";
			
	}
			
	mysqli_close($conn);
			
?>