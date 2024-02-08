<?php
session_start();
include 'grocery_connections.php';
if (isset($_REQUEST['username']))
	$username = $_REQUEST['username'];
else
	$username = 'null';

if (isset($_REQUEST['password']))
	$password = $_REQUEST['password'];
else
	$password = 'null';

$qry = "select * from admin where username='" . $username . "' and password='" . $password . "'";
$rs = mysqli_query($conn, $qry);
if ($row = mysqli_fetch_assoc($rs)) {
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	echo "<script language='javascript'>window.location='admin/Admin_Home.php';</script>";
} else {
	echo "<script language='javascript'>window.location='Admin_Login.php?msg=Invalid username/password';</script>";
}
mysqli_close($conn);
?>
