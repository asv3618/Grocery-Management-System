<?php 
session_start();
include '../grocery_connections.php';
if(isset($_REQUEST['store_name']))
	$store_name=$_REQUEST['store_name'];
else
	$store_name='null';

if(isset($_REQUEST['location']))
	$location=$_REQUEST['location'];
else
	$location='null';

if(isset($_REQUEST['mobile']))
	$mobile=$_REQUEST['mobile'];
else
	$mobile='null';

$qry="insert into store(store_name,location,mobile) values('$store_name','$location','$mobile')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>alert('Record Added Successfully.');window.location='NewStore.php';</script>";}
 else 
 {
	 echo 'Error: '.mysqli_error($conn);
}
mysqli_close($conn);
?>