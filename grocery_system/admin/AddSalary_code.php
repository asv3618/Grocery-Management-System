<?php 
session_start();
include '../grocery_connections.php';

if(isset($_REQUEST['employee_id']))
	$employee_id=$_REQUEST['employee_id'];
else
	$employee_id='null';

if(isset($_REQUEST['department_id ']))
	$department_id =$_REQUEST['department_id '];
else
	$department_id ='null';

if(isset($_REQUEST['salary_date']))
	$salary_date=$_REQUEST['salary_date'];
else
	$salary_date='null';

if(isset($_REQUEST['salary_amount']))
	$salary_amount=$_REQUEST['salary_amount'];
else
	$salary_amount='null';

$qry="insert into salary(employee_id,department_id ,salary_date,salary_amount) values('$employee_id','$department_id ','$salary_date','$salary_amount')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>alert('Record Added Successfully.');window.location='AddSalary.php';</script>";}
 else 
 {
	 echo 'Error: '.mysqli_error($conn);
}
mysqli_close($conn);
?>