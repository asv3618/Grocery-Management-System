<?php 
session_start();
include '../grocery_connections.php';	
if(isset($_REQUEST['department_name']))
	$department_name=$_REQUEST['department_name'];
else
	$department_name='null';

if(isset($_REQUEST['designation']))
	$designation=$_REQUEST['designation'];
else
	$designation='null';

if(isset($_REQUEST['salary']))
	$salary=$_REQUEST['salary'];
else
	$salary='null';

$qry="insert into department(department_name,designation,salary) values('$department_name','$designation','$salary')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>alert('Record Added Successfully.');window.location='NewDepartment.php';</script>";}
 else 
 {
	 echo 'Error: '.mysqli_error($conn);
}
mysqli_close($conn);
?>