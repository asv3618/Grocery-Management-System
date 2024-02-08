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
	<div class="container card" style="background-color:#D5DBDB">
		<h4>
			<b>
				<center><p style="color: green;">View & Manage Customers</p></center>
			</b>
		</h4>
		<form name='f1' method='post' action="#" enctype="">
			<?php
			$qry = "select customer_id,first_name,last_name,mobile,email,address,customer_pic,password from customer";
			$rs = mysqli_query($conn, $qry);
			if (mysqli_num_rows($rs) > 0) {
				echo "<table class='table table-sm table-striped' id='table_id'>";
				echo "<thead class='table-dark'>";
				echo "<tr><th></th><th></th>";
				echo "<th>Customer Id</th>";
				echo "<th>First Name</th>";
				echo "<th>Last Name</th>";
				echo "<th>Mobile</th>";
				echo "<th>Email</th>";
				echo "<th>Address</th>";
				echo "<th>Customer Pic</th>";
				echo "<th>Password</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc($rs)) {
					echo "<tr><th><A class='' href='ManageCustomers_edit_code.php?customer_id=" . $row['customer_id'] . "'><i class='fa fa-edit' style='font-size:24px;color:blue'></i></th> <th><A class='' href='ManageCustomers_code.php?customer_id=" . $row['customer_id'] . "'><i class='fa fa-trash-o' style='font-size:24px;color:red'></i></A></th>";
					echo "<td>" . $row['customer_id'] . "</td>";
					echo "<td>" . $row['first_name'] . "</td>";
					echo "<td>" . $row['last_name'] . "</td>";
					echo "<td>" . $row['mobile'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "<td>" . $row['address'] . "</td>";
					echo "<td><img src='../uploads/" . $row['customer_pic'] . "' width='100px' height='100px'></img></td>";
					echo "<td>" . $row['password'] . "</td>";
					echo "</tr>";
				}
			} else {
				echo "<h2>No Customers Found</h2>";
			
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