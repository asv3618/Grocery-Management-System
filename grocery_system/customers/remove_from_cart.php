	<?php
	include '../grocery_connections.php';
	$qry = "delete from cart where cart_id='" . $_REQUEST['cart_id'] . "'";
	if (mysqli_query($conn, $qry)) {
		echo "<script language='javascript'>window.location='ManageCart.php';</script>";
	}
	mysqli_close($conn);

	?>