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
	?>
	<br>
	<div class="container card" style="background-color:#E7EBEA">
		<h4><b>
				<center><p style="color: green;">Manage Rewards</p><center>
			</b></h4>
		<form name='f1' method='post' action="#" enctype="">
			<?php


			$qry = "select reward_id,customer_id,order_no,reward_points from rewards where customer_id='".$_SESSION['customer_id']."'";
			$rs = mysqli_query($conn, $qry);
			if (mysqli_num_rows($rs) > 0) {
				echo "<table class='table table-sm table-striped' id='table_id'>";
				echo "<thead class='table-light'>";
				echo "<tr>";
				echo "<th>Reward Id</th>";
				echo "<th>Customer Id</th>";
				echo "<th>Order No</th>";
				echo "<th>Reward Points</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc($rs)) {
					echo "<tr>";
					echo "<td>" . $row['reward_id'] . "</td>";
					echo "<td>" . $row['customer_id'] . "</td>";
					echo "<td>" . $row['order_no'] . "</td>";
					echo "<td>" . $row['reward_points'] . "</td>";
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