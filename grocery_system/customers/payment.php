<?php session_start();
include '../grocery_connections.php';

if(!isset($_POST['paytype'])){
	echo "<script language='javascript'>window.alert('Payment mode not selected.');window.location='ManageCart.php';</script>";
	return;
}

$paytype = $_POST['paytype'];

function getOrderNumber(){
	$order_num = "" . rand(100, 10000) . "" . rand(100, 100000);
	return $order_num;
}

$order_num = getOrderNumber();

$qry = "insert into shipping_address(order_number,customer_id,shipping_address,zipcode,mobile) values('$order_num','" . $_SESSION['customer_id'] . "','" . $_REQUEST['shipping_address'] . "','" . $_REQUEST['zipcode'] . "','" . $_REQUEST['mobile'] . "')";
mysqli_query($conn, $qry);

$qry = "select cart_id,product_id from cart where customer_id='" . $_SESSION['customer_id'] . "'";
$rs = mysqli_query($conn, $qry);

$status = false;
$total = 0;
$sno = 1;
while ($row = mysqli_fetch_assoc($rs)) {

	$qry1 = "select product_id,product_name,category_name,description,price,reward_points from product where product_id='" . $row['product_id'] . "'";
	$rs1 = mysqli_query($conn, $qry1);
	if ($row1 = mysqli_fetch_assoc($rs1)) {
		$qry = "insert into orders(order_number,customer_id,order_date,product_id,product_name,price,quantity,bill_amount,reward_points,status) 
		values('$order_num','" . $_SESSION['customer_id'] . "',curdate(),'" . 
		$row1['product_id'] . "','".$row1['product_name'] . "','" . $row1['price'] . "','" . $_REQUEST['q'.$sno] . "','" . ( $row1['price'] * $_REQUEST['q'.$sno])."','".($row1['reward_points'] * $_REQUEST['q'.$sno])."','Ordered')";
		//echo "<br>$qry";	
		$total += ( $row1['price'] * $_REQUEST['q'.$sno]);
		
		
		if (mysqli_query($conn, $qry)) {
			$status = true;
			mysqli_query($conn, "delete from cart where cart_id='" . $row['cart_id'] . "'");
		}
	}
	$sno++;
}
//echo "status = $status paytype= $paytype";
//echo "total=$total";
if ($status == 1 && $paytype=='card') {
	$qry = "select * from bank where card_type='" . $_REQUEST['card_type'] . "' and card_number ='" . $_REQUEST['card_number'] . "' and exp_date='" . $_REQUEST['expiry_date'] . "' and cvv='" . $_REQUEST['cvv'] . "'";
	//echo "<br>$qry";	
	$rs = mysqli_query($conn, $qry);
	if ($row = mysqli_fetch_assoc($rs)) {
		//echo "<br>update bank  set balance = balance + $total where account_number='123456789'";
		mysqli_query($conn, "update bank  set balance = balance + $total where account_number='123456789'");
		mysqli_query($conn, "update bank set balance=balance-$total where card_number='" . $_REQUEST['card_number'] . "'");
		mysqli_query($conn, "insert into transactions(transaction_date, from_account, to_account, amount) values (curdate(),'".$row['account_number']."','123456789','$total')");
		}
		
		
		////////// insert into payment table
		$qry = "insert into payments(payment_date,order_no,customer_id,order_amount,payment_type,card_type,card_number,payment_status) values  
		(curdate(),'$order_num','" . $_SESSION['customer_id'] . "','$total','$paytype', '". $_REQUEST['card_type']."','".$_REQUEST['card_number']."','success')";
		mysqli_query($conn, $qry);
		
		//echo $qry;
		///////////
		
		
		
}

mysqli_close($conn);
echo "<script language='javascript'>window.alert('Order placed.');window.location='Customers_Home.php';</script>";
?>
 