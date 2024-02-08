<?php 
session_start();
include '../grocery_connections.php'; 

if(isset($_REQUEST['category_name']))
	$category_name=$_REQUEST['category_name'];
else
	$category_name='null';

if(isset($_REQUEST['product_name']))
	$product_name=$_REQUEST['product_name'];
else
	$product_name='null';

if(isset($_REQUEST['description']))
	$description=$_REQUEST['description'];
else
	$description='null';

if(isset($_REQUEST['price']))
	$price=$_REQUEST['price'];
else
	$price='null';
if (!is_dir('uploads')) {mkdir('uploads');}
if(isset($_FILES['product_pic']))
{
	$rndno=rand();
	$product_pic=$rndno.$_FILES['product_pic']['name'];



	$errors= array();
	$file_name = $rndno.$_FILES['product_pic']['name'];
	$file_size =$_FILES['product_pic']['size'];
	$file_tmp =$_FILES['product_pic']['tmp_name'];
	$file_type=$_FILES['product_pic']['type'];
	$ss=explode('.',$_FILES['product_pic']['name']);
	$file_ext=strtolower($ss[count($ss)-1]);/* // $file_ext=strtolower(end(explode('.',$_FILES['product_pic']['name']))); 
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
	$product_pic='null';

if(isset($_REQUEST['reward_points']))
	$reward_points=$_REQUEST['reward_points'];
else
	$reward_points='null';

if(isset($_REQUEST['stock_quantity']))
	$stock_quantity=$_REQUEST['stock_quantity'];
else
	$stock_quantity='null';

$qry="insert into product(category_name,product_name,description,price,product_pic,reward_points,stock_quantity) values('$category_name','$product_name','$description','$price','$product_pic','$reward_points','$stock_quantity')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>alert('Record Added Successfully.');window.location='NewProducts.php';</script>";}
 else 
 {
	 echo 'Error: '.mysqli_error($conn);
}
mysqli_close($conn);
?>