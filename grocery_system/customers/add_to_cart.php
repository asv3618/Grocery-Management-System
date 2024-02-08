<?php
session_start();
include '../grocery_connections.php';
$sql = "insert into cart(product_id,customer_id,cart_date) values('" . $_REQUEST['product_id'] . "','" . $_SESSION['customer_id'] . "',curdate())";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script language='javascript'>window.location='Customers_Home.php?n=1';</script>";
} else {
	echo "<script language='javascript'>window.location='Customers_Home.php?n=0';</script>";
}
?>