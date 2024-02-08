<?php 
session_start();$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'groceriesdb';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $conn ){
	die('Could not connect: ' . mysqli_error());
}

if(isset($_REQUEST['points']))
	$points=$_REQUEST['points'];
else
	$points='null';

if(isset($_REQUEST['amount']))
	$amount=$_REQUEST['amount'];
else
	$amount='null';

$qry="insert into reward_points_amount(points,amount) values('$points','$amount')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>alert('Record Added Successfully.');window.location='NewRewardPointsAmount.php';</script>";}
 else 
 {
	 echo 'Error: '.mysqli_error($conn);
}
mysqli_close($conn);
?>