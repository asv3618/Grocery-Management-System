<?php 
session_start();
include '../grocery_connections.php'; 
if(isset($_REQUEST['first_name']))
	$first_name=$_REQUEST['first_name'];
else
	$first_name='null';

if(isset($_REQUEST['last_name']))
	$last_name=$_REQUEST['last_name'];
else
	$last_name='null';

if(isset($_REQUEST['gender']))
	$gender=$_REQUEST['gender'];
else
	$gender='null';

if(isset($_REQUEST['age']))
	$age=$_REQUEST['age'];
else
	$age='null';

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
if (!is_dir('uploads')) {mkdir('uploads');}
if(isset($_FILES['emp_pic']))
{
	$rndno=rand();
	$emp_pic=$rndno.$_FILES['emp_pic']['name'];



	$errors= array();
	$file_name = $rndno.$_FILES['emp_pic']['name'];
	$file_size =$_FILES['emp_pic']['size'];
	$file_tmp =$_FILES['emp_pic']['tmp_name'];
	$file_type=$_FILES['emp_pic']['type'];
	$ss=explode('.',$_FILES['emp_pic']['name']);
	$file_ext=strtolower($ss[count($ss)-1]);/* // $file_ext=strtolower(end(explode('.',$_FILES['emp_pic']['name']))); 
	$expensions= array('jpeg','jpg','png');
	if(in_array($file_ext,$expensions)=== false)
		{
			$errors[]='extension not allowed, please choose a JPEG or PNG file.';
		} */
if($file_size > 2097152)
{
	$errors[]='File size must be excately 2 MB';
}
if(empty($errors)==true)
{
	move_uploaded_file($file_tmp,'uploads/'.$file_name);
}
else
{

	print_r($errors);
}
}
else
	$emp_pic='null';

if(isset($_REQUEST['department_id']))
	$department_id=$_REQUEST['department_id'];
else
	$department_id='null';

if(isset($_REQUEST['role']))
	$role=$_REQUEST['role'];
else
	$role='null';

if(isset($_REQUEST['password']))
	$password=$_REQUEST['password'];
else
	$password='null';

$qry="insert into employee(first_name,last_name,gender,age,mobile,email,address,emp_pic,department_id,role,password) values('$first_name','$last_name','$gender','$age','$mobile','$email','$address','$emp_pic','$department_id','$role','$password')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>alert('Record Added Successfully.');window.location='NewEmployees.php';</script>";}
 else 
 {
	 echo 'Error: '.mysqli_error($conn);
}
mysqli_close($conn);
?>