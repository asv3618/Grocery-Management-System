<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include 'groceryfiles/groceryfiles.php';
	include '../grocery_connections.php';
	?>
</head>

<body>

	<?php
	include 'Admin_Home_Menu.php';
	?>

	<br>
	<div class="card" style="margin-left:10px;background-color: #E7EBEA">
		<center><h2 style='color:green'>Orders History</h2></center>
		<?php
		$qry = "select order_id,order_number,customer_id,order_date,product_id,product_name,price,quantity,bill_amount,reward_points,status from orders order by order_id desc";
		$rs = mysqli_query($conn, $qry);
		if (mysqli_num_rows($rs) > 0) {
			echo "<table class='table table-sm table-striped' id='table_id' style='width:100%'>";
			echo "<thead class='table-dark'>";
			echo "<tr>";
			echo "<th>Order Id</th>";
			echo "<th>Order Number</th>";
			echo "<th>Customer Id</th>";
			echo "<th>Order Date</th>";
			echo "<th>Product Id</th>";
			echo "<th>Product Name</th>";
			echo "<th>Price</th>";
			echo "<th>Quantity</th>";
			echo "<th>Bill Amount</th>";
			echo "<th>Reward Points</th>";
			echo "<th>Status</th>";
			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
			while ($row = mysqli_fetch_assoc($rs)) {
				echo "<tr>";
				
				echo "<td>" . $row['order_id'] . "</td>";
				echo "<td>" . $row['order_number'] . "</td>";
				echo "<td>" . $row['customer_id'] . "</td>";
				echo "<td>" . $row['order_date'] . "</td>";
				echo "<td>" . $row['product_id'] . "</td>";
				echo "<td>" . $row['product_name'] . "</td>";
				echo "<td>" . $row['price'] . "</td>";
				echo "<td>" . $row['quantity'] . "</td>";
				echo "<td>" . $row['bill_amount'] . "</td>";
				echo "<td>" . $row['reward_points'] . "</td>";
				echo "<td>" . $row['status'] . "</td>";
				echo "</tr>";
			}
			echo "</tbody>";
			echo "<thead class='table-dark'>";
			echo "<tr>";
			echo "<th>Order Id</th>";
			echo "<th>Order Number</th>";
			echo "<th>Customer Id</th>";
			echo "<th>Order Date</th>";
			echo "<th>Product Id</th>";
			echo "<th>Product Name</th>";
			echo "<th>Price</th>";
			echo "<th>Quantity</th>";
			echo "<th>Bill Amount</th>";
			echo "<th>Reward Points</th>";
			echo "<th>Status</th>";
			echo "</tr>";
			echo "</thead></table></div>";
		} else {

			echo "<h1>Records Not Found</h1>";
		}

		mysqli_close($conn);
		?>
	</div>
	<br>
	</div>

	<script>
		$(document).ready(function() {
			$('#table_id').DataTable({
            order: [[0, 'desc']]
        });

		});
	</script>

</body>

</html>