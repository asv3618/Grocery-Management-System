<?php
session_start();
?>
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
		<center>
			<h4><b>
					<p style="color: green;"> Manage Department</p>
				</b></h4>
		</center>
		<form name='f1' method='post' action="#" enctype="">
			<?php

			include '../grocery_connections.php';
			$qry = "select department_id,department_name,designation,salary from department";
			$rs = mysqli_query($conn, $qry);
			if (mysqli_num_rows($rs) > 0) {
				echo "<table class='table table-sm table-striped' id='table_id'>";
				echo "<thead class='table-dark'>";
				echo "<tr><th></th><th></th>";
				echo "<th>Department Id</th>";
				echo "<th>Department Name</th>";
				echo "<th>Designation</th>";
				echo "<th>Salary</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc($rs)) {


					echo "<tr><th><A class='' href='ManageDepartment_edit_code.php?department_id=" . $row['department_id'] . "'><i class='fa fa-edit' style='font-size:24px;color:blue'></i></th> <th><A class='' href='ManageDepartment_code.php?department_id=" . $row['department_id'] . "'><i class='fa fa-trash-o' style='font-size:24px;color:red'></i></A></th>";
					echo "<td>" . $row['department_id'] . "</td>";
					echo "<td>" . $row['department_name'] . "</td>";
					echo "<td>" . $row['designation'] . "</td>";
					echo "<td>" . $row['salary'] . "</td>";
					echo "</tr>";
				}
			} else {
				echo "<h2>No Departments Found</h2>";
				echo "<h4;>Please Add New Department Details to Manage them here</h4>";
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