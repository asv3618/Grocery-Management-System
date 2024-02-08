	<?php 
			session_start();
			include '../grocery_connections.php';
			$qry="delete from category where category_id=		'".$_REQUEST['category_id']."'";			
			if (mysqli_query($conn, $qry))
			{
					
			echo "<script language='javascript'>window.alert('Record deleted successfully');window.location='ManageCategories.php';</script>";
					
			}
					
			mysqli_close($conn);
					
?>