<?php
session_start();
include '../grocery_connections.php';
$customer_id = $_SESSION['customer_id'];
if (isset($_REQUEST['product_id']))
	$product_id = $_REQUEST['product_id'];
else
	$product_id = 'null';

$qry = "insert into wishlist(customer_id,product_id,date_selected) values('$customer_id','$product_id',curdate())";
if (mysqli_query($conn, $qry)) {
	echo "<script language='javascript'>alert('Product added to wishtlist.');window.location='Customers_Home.php';</script>";
} else {
	echo 'Error: ' . mysqli_error($conn);
}
mysqli_close($conn);
?>
