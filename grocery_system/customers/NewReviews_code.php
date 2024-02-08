<?php
session_start();
include '../grocery_connections.php';


if (isset($_REQUEST['product_id']))
	$product_id = $_REQUEST['product_id'];
else
	$product_id = 'null';

if (isset($_REQUEST['rating']))
	$rating = $_REQUEST['rating'];
else
	$rating = 'null';

if (isset($_REQUEST['review_comments']))
	$review_comments = $_REQUEST['review_comments'];
else
	$review_comments = 'null';

$qry = "insert into reviews(review_date,customer_id,product_id,rating,review_comments) values(curdate(),'" . $_SESSION['customer_id'] . "','$product_id','$rating','$review_comments')";

if (mysqli_query($conn, $qry)) {
	echo "<script language='javascript'>alert('Review Posted.');window.location='ManageOrders.php';</script>";
} else {
	echo 'Error: ' . mysqli_error($conn);
}
mysqli_close($conn);
