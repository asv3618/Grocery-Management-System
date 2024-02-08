<?php 
session_start();
include '../grocery_connections.php';
if(isset($_REQUEST['customer_id']))
	$customer_id=$_REQUEST['customer_id'];
else
	$customer_id='null';

if(isset($_REQUEST['order_no']))
	$order_no=$_REQUEST['order_no'];
else
	$order_no='null';

if(isset($_REQUEST['reward_points']))
	$reward_points=$_REQUEST['reward_points'];
else
	$reward_points='null';

$qry="insert into rewards(customer_id,order_no,reward_points) values('$customer_id','$order_no','$reward_points')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>alert('Record Added Successfully.');window.location='NewRewards.php';</script>";}
 else 
 {
	 echo 'Error: '.mysqli_error($conn);
}
mysqli_close($conn);
?>