<?php
session_start();
include '../grocery_connections.php';
if (isset($_REQUEST['order_number']))
    $order_number = $_REQUEST['order_number'];
else
    $order_number = 'null';

$qry = "update orders set status='" . $_REQUEST['status'] . "' where order_number='$order_number'";
mysqli_query($conn, $qry);
echo "<script language='javascript'>window.location='ShowOrders.php';</script>";
mysqli_close($conn);
?>