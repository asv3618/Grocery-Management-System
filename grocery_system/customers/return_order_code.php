<?php
session_start();
include '../grocery_connections.php';
if (isset($_REQUEST['reason']))
	$reason = $_REQUEST['reason'];
else
	$reason = 'null';

$qry = "insert into return_order(customer_id, order_number, return_date, reason, return_status) values('" . $_SESSION['customer_id'] . "','" . $_REQUEST['order_number'] . "',curdate(),'$reason','".$_REQUEST['return_type']."')";

if (mysqli_query($conn, $qry)) {
	$qry = "update orders set status='".$_REQUEST['return_type']."' where order_id='" . $_REQUEST['order_id'] . "'";
	mysqli_query($conn, $qry);
	echo "<script language='javascript'>window.alert('Order cancelled');window.location='ManageOrders.php';</script>";
} else {
	echo 'Error: ' . mysqli_error($conn);
}
mysqli_close($conn);
