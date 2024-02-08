<?php
session_start();
include '../grocery_connections.php';

if (isset($_REQUEST['product_id']))
	$product_id = $_REQUEST['product_id'];
else
	$product_id = 'null';

if (isset($_REQUEST['vendor_id']))
	$vendor_id = $_REQUEST['vendor_id'];
else
	$vendor_id = 'null';

if (isset($_REQUEST['stock_quantity']))
	$stock_quantity = $_REQUEST['stock_quantity'];
else
	$stock_quantity = 'null';

if (isset($_REQUEST['restock_date']))
	$restock_date = $_REQUEST['restock_date'];
else
	$restock_date = 'null';

$qry = "insert into inventory(product_id,vendor_id,stock_quantity,restock_date) values('$product_id','$vendor_id','$stock_quantity','$restock_date')";

if (mysqli_query($conn, $qry)) {
	
	mysqli_query($conn, "update product set stock_quantity=stock_quantity+$stock_quantity where product_id='$product_id'");

	echo "<script language='javascript'>window.location='NewInventory.php?n=1';</script>";
} else {
	echo "<script language='javascript'>window.location='NewInventory.php?n=0';</script>";
}
mysqli_close($conn);
?>