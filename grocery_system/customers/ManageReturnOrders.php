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
	include 'Customers_Home_Menu.php';
	?><br>
	<div class="container card" style="background-color:#D5DBDB"><br>
		<center><h4><p style="color: green;">Return Orders</p></h4></center>
		    <form name='f1' method='post' action="#" enctype="">
			<?php

			$qry = "select return_id,customer_id,order_number,return_date,reason,return_status from return_order";
			$rs = mysqli_query($conn, $qry);
			if (mysqli_num_rows($rs) > 0) {
				echo "<table class='table table-sm table-striped' id='table_id'>";
				echo "<thead class='table-light'>";
				echo "<tr>";
				echo "<th>Return Id</th>";
				echo "<th>Customer Id</th>";
				echo "<th>Order No</th>";
				echo "<th>Return Date</th>";
				echo "<th>Reason</th>";
				echo "<th>Return Status</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc($rs)) {
					echo "<tr>";
					echo "<td>" . $row['return_id'] . "</td>";
					echo "<td>" . $row['customer_id'] . "</td>";
					echo "<td>" . $row['order_number'] . "</td>";
					echo "<td>" . $row['return_date'] . "</td>";
					echo "<td>" . $row['reason'] . "</td>";
					echo "<td>" . $row['return_status'] . "</td>";
					echo "</tr>";
				}
			} else {
			}

			mysqli_close($conn);
			?>
	</div>
	<br>
	</div>

	<script>
		$(document).ready(function() {
			$('#table_id').DataTable();
		});
	</script>

</body>

</html>