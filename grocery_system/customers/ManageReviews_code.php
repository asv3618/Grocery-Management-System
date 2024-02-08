	<?php
	include '../grocery_connections.php';
	$qry = "delete from reviews where review_id='" . $_REQUEST['review_id'] . "'";
	if (mysqli_query($conn, $qry)) {
		echo "<script language='javascript'>window.location='ManageReviews.php';</script>";
	}
	mysqli_close($conn);

	?>