<?php 
session_start();$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'groceriesdb';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $conn ){
	die('Could not connect: ' . mysqli_error());
}

if(isset($_REQUEST['order_number']))
	$order_number=$_REQUEST['order_number'];
else
	$order_number='null';

if(isset($_REQUEST['customer_id']))
	$customer_id=$_REQUEST['customer_id'];
else
	$customer_id='null';

if(isset($_REQUEST['product_id']))
	$product_id=$_REQUEST['product_id'];
else
	$product_id='null';

if(isset($_REQUEST['order_date']))
	$order_date=$_REQUEST['order_date'];
else
	$order_date='null';

if(isset($_REQUEST['shipping_id']))
	$shipping_id=$_REQUEST['shipping_id'];
else
	$shipping_id='null';

$qry="insert into orders(order_number,customer_id,product_id,order_date,shipping_id) values('$order_number','$customer_id','$product_id','$order_date','$shipping_id')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>alert('Record Added Successfully.');window.location='NewOrders.php';</script>";}
 else 
 {
	 echo 'Error: '.mysqli_error($conn);
}
mysqli_close($conn);
?>