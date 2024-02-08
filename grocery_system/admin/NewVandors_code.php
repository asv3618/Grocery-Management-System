<?php 
session_start();
include '../grocery_connections.php';
if(isset($_REQUEST['vendor_name']))
	$vendor_name=$_REQUEST['vendor_name'];
else
	$vendor_name='null';

if(isset($_REQUEST['mobile']))
	$mobile=$_REQUEST['mobile'];
else
	$mobile='null';

if(isset($_REQUEST['email']))
	$email=$_REQUEST['email'];
else
	$email='null';

if(isset($_REQUEST['address']))
	$address=$_REQUEST['address'];
else
	$address='null';

if(isset($_REQUEST['supplies']))
	$supplies=$_REQUEST['supplies'];
else
	$supplies='null';

$qry="insert into vendor(vendor_name,mobile,email,address,supplies) values('$vendor_name','$mobile','$email','$address','$supplies')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>alert('Record Added Successfully.');window.location='NewVandors.php';</script>";}
	 	 
 else 
 {
	 echo 'Error: '.mysqli_error($conn);
}
mysqli_close($conn);
?>


