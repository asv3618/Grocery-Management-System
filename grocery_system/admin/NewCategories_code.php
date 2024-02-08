<?php 
include '../grocery_connections.php';
if(isset($_REQUEST['category_name']))
	$category_name=$_REQUEST['category_name'];
else
	$category_name='null';

$qry="insert into category(category_name) values('$category_name')";

if(mysqli_query($conn, $qry))
{
	 echo "<script language='javascript'>window.location='NewCategories.php?res=1';</script>";
}
else 
{
	 echo "<script language='javascript'>window.location='NewCategories.php?res=0';</script>";
}
mysqli_close($conn);
?>