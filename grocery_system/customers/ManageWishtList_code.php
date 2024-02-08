	<?php
	include '../grocery_connections.php';
	$qry = "delete from wishlist where wishlist_id='" . $_REQUEST['wishlist_id'] . "'";
	if (mysqli_query($conn, $qry)) {

		echo "<script language='javascript'>window.alert('Wishlist deleted');window.location='ManageWishtList.php';</script>";
	}

	mysqli_close($conn);

	?>