<?php 
	session_start();
	include '../grocery_connections.php';

	$price = $_REQUEST['price'];
	$qry = "update orders set status='Refund' where order_id='".$_REQUEST['order_id']."'";
	$rs = mysqli_query($conn, $qry);
	
	$qry = "insert into refund (refund_date,customer_id,order_no,refund_amount,refund_type,refund_status) values(
		curdate(),'".$_SESSION['customer_id']."','".$_REQUEST['order_number']."','$price','Product Return','Success')";
	
	mysqli_query($conn, $qry);


	$qry = "select   * from bank where card_number  in (select card_number from payments where order_no='".$_REQUEST['order_number']."')";
	//echo "<br>$qry <br>Price=$price";	
	$rs = mysqli_query($conn, $qry);
	if ($row = mysqli_fetch_assoc($rs)) {
		//echo "<br>update bank  set balance = balance + $total where account_number='123456789'";

		mysqli_query($conn, "update bank  set balance = balance - $price where account_number='123456789'");
		mysqli_query($conn, "update bank set balance=balance+$price where card_number='" . $row['card_number'] . "'");
		mysqli_query($conn, "insert into transactions(transaction_date, from_account, to_account, amount) values (curdate(),'123456789','".$row['account_number']."','$price')");
		}


mysqli_close($conn);
echo "<script language='javascript'>window.alert('Refund success.');window.location='ReturnCancelledOrders.php';</script>";
?>
 