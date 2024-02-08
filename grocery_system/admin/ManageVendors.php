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
				<center><p style="color: green;"> View & Manage Vendors</p></center>
			</b></h4>
		<form name='f1' method='post' action="#" enctype="">
			<?php

			include '../grocery_connections.php';
			$qry = "select vendor_id,vendor_name,mobile,email,address,supplies from vendor";
			$rs = mysqli_query($conn, $qry);
			if (mysqli_num_rows($rs) > 0) {
				echo "<table class='table table-sm table-striped' id='table_id'>";
				echo "<thead class='table-dark'>";
				echo "<tr><th></th><th></th>";
				echo "<th>Vendor Id</th>";
				echo "<th>Vendor Name</th>";
				echo "<th>Mobile</th>";
				echo "<th>Email</th>";
				echo "<th>Address</th>";
				echo "<th>Supplies</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc($rs)) {


					echo "<tr><th><A class='' href='ManageVendors_edit_code.php?vendor_id=" . $row['vendor_id'] . "'><i class='fa fa-edit' style='font-size:24px;color:blue'></i></th> <th><A class='' href='ManageVendors_code.php?vendor_id=" . $row['vendor_id'] . "'><i class='fa fa-trash-o' style='font-size:24px;color:red'></i></A></th>";
					echo "<td>" . $row['vendor_id'] . "</td>";
					echo "<td>" . $row['vendor_name'] . "</td>";
					echo "<td>" . $row['mobile'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "<td>" . $row['address'] . "</td>";
					echo "<td>" . $row['supplies'] . "</td>";
					echo "</tr>";
				}
				echo "
	</table>
</div>";
			} else {
				echo "<h2>No Vendors Found</h2>";
				echo "<h4;>Please Add New Vendor Details to Manage them here</h4>";
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