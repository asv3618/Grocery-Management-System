<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include 'groceryfiles/groceryfiles.php';
	?>
</head>

<body>

	<?php
	include 'Admin_Home_Menu.php';
	?><br>
	<div class="container card" style="background-color:#D5DBDB"><br>
		<h4><b>
				<center><p style="color: green;"> Manage Reward Points Amount</p></center>
			</b></h4>
		<form name='f1' method='post' action="#" enctype="">
			<?php

			include '../grocery_connections.php';
			$qry = "select points_id,points,amount from reward_points_amount";
			$rs = mysqli_query($conn, $qry);
			if (mysqli_num_rows($rs) > 0) {
				echo "<table class='table table-sm table-striped' id='table_id'>";
				echo "<thead class='table-dark'>";
				echo "<tr><th></th><th></th>";
				echo "<th>Points Id</th>";
				echo "<th>Points</th>";
				echo "<th>Amount</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc($rs)) {


					echo "<tr><th><A class='' href='ManageRewardPointsAmount_edit_code.php?points_id=" . $row['points_id'] . "'><i class='fa fa-edit' style='font-size:24px;color:blue'></i></th> <th><A class='' href='ManageRewardPointsAmount_code.php?points_id=" . $row['points_id'] . "'><i class='fa fa-trash-o' style='font-size:24px;color:red'></i></A></th>";
					echo "<td>" . $row['points_id'] . "</td>";
					echo "<td>" . $row['points'] . "</td>";
					echo "<td>" . $row['amount'] . "</td>";
					echo "</tr>";
				}
				echo "
	</tbody>";
			} else {
					echo "<h2>No Rewards Found</h2>";
					echo "<h4;>Please Add New Reward Point Details to Manage them here</h4>";
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