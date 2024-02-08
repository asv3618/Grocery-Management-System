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
	<div class="container card" style="background-color:#D5DBDB">
		<h4><b>
				<center><p style="color: green;"> View & Manage Inventory</p></center>
			</b></h4>
		<form name='f1' method='post' action="#" enctype="">
			<?php
			$qry = "select inventory_id,product_id,vendor_id,stock_quantity,restock_date from inventory";
			$rs = mysqli_query($conn, $qry);
			if (mysqli_num_rows($rs) > 0) {
				echo "<table class='table table-sm table-striped' id='table_id'>";
				echo "<thead class='table-dark'>";
				echo "<tr><th></th><th></th>";
				echo "<th>Inventory Id</th>";
				echo "<th>Product Id</th>";
				echo "<th>Vendor Id</th>";
				echo "<th>Stock Quantity</th>";
				echo "<th>Restock Date</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc($rs)) {


					echo "<tr><th><A class='' href='ManageInventory_edit_code.php?inventory_id=" . $row['inventory_id'] . "'><i class='fa fa-edit' style='font-size:24px;color:blue'></i></th> <th><A class='' href='ManageInventory_code.php?inventory_id=" . $row['inventory_id'] . "'><i class='fa fa-trash-o' style='font-size:24px;color:red'></i></A></th>";
					echo "<td>" . $row['inventory_id'] . "</td>";
					echo "<td>" . $row['product_id'] . "</td>";
					echo "<td>" . $row['vendor_id'] . "</td>";
					echo "<td>" . $row['stock_quantity'] . "</td>";
					echo "<td>" . $row['restock_date'] . "</td>";
					echo "</tr>";
				}
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
			$('#table_id').DataTable();
		});
	</script>

</body>

</html>