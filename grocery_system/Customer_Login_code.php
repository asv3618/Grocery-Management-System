<?php
session_start();
include 'grocery_connections.php';
if (isset($_REQUEST['email']))
	$email = $_REQUEST['email'];
else
	$email = 'null';

if (isset($_REQUEST['password']))
	$password = $_REQUEST['password'];
else
	$password = 'null';

$qry = "select * from customer where email='" . $email . "' and password='" . $password . "'";
$rs = mysqli_query($conn, $qry);
if ($row = mysqli_fetch_assoc($rs)) {
	$_SESSION['customer_id'] = $row['customer_id'];
	echo "<script language='javascript'>window.location='customers/Customers_Home.php';</script>";
} else {
	echo "<script language='javascript'>window.location='Customer_Login.php?msg=Invalid username/password';</script>";
}
mysqli_close($conn);
?>
