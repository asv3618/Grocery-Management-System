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
	?><br>
	<div class="container card" style="background-color:#D5DBDB"><br>
		<h4><b>
		<center><p style="color: green;"> View & Manage Products</p><center>
			</b></h4>
		<form name='f1' method='post' action="#" enctype="">

			<div class="container" style='margin-top:-40px'>
				<?php


				$qry = "select product_id,category_name,product_name,description,price,product_pic,reward_points,stock_quantity from product";
				$rs = mysqli_query($conn, $qry);
				if (mysqli_num_rows($rs) > 0) {
					echo "<table class='table table-sm table-striped' id='table_id'>";
					echo "<thead class='table-dark'>";
					echo "<tr><th></th><th></th>";
					echo "<th>Product Id</th>";
					echo "<th>Category Name</th>";
					echo "<th>Product Name</th>";
					echo "<th>Description</th>";
					echo "<th>Price</th>";
					echo "<th>Product Pic</th>";
					echo "<th>Reward Points</th>";
					echo "<th>Stock Quantity</th>";
					echo "</tr>";
					echo "</thead>";
					echo "<tbody>";
					while ($row = mysqli_fetch_assoc($rs)) {
						echo "<tr><th><A class='' href='ManageProducts_edit_code.php?product_id=" . $row['product_id'] . "'><i class='fa fa-edit' style='font-size:24px;color:blue'></i></th> <th><A class='' href='ManageProducts_code.php?product_id=" . $row['product_id'] . "'><i class='fa fa-trash-o' style='font-size:24px;color:red'></i></A></th>";
						echo "<td>" . $row['product_id'] . "</td>";
						echo "<td>" . $row['category_name'] . "</td>";
						echo "<td>" . $row['product_name'] . "</td>";
						echo "<td>" . $row['description'] . "</td>";
						echo "<td>" . $row['price'] . "</td>";
						echo "<td><img src='uploads/" . $row['product_pic'] . "' width='100px' height='100px'></img></td>";
						echo "<td>" . $row['reward_points'] . "</td>";
						echo "<td>" . $row['stock_quantity'] . "</td>";
						echo "</tr>";
					}
				}
				else{
						echo "<br><h2>No Products Found</h2></br>";
						echo "<h5>Please Add New Products Details to Manage them here</h5>";}
				

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