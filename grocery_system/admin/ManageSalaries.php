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
				<center><p style="color: green;"> View & Manage Salaries</p></center>
			</b></h4>
		<form name='f1' method='post' action="#" enctype="">
			<?php

			include '../grocery_connections.php';
			$qry = "select salary_id,employee_id,department_id,salary_date,salary_amount from salary";
			$rs = mysqli_query($conn, $qry);
			if (mysqli_num_rows($rs) > 0) {
				echo "<table class='table table-sm table-striped' id='table_id'>";
				echo "<thead class='table-dark'>";
				echo "<tr><th></th><th></th>";
				echo "<th>Salary Id</th>";
				echo "<th>Employee Id</th>";
				echo "<th>Department Id</th>";
				echo "<th>Salary Date</th>";
				echo "<th>Salary Amount</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc($rs)) {


					echo "<tr><th><A class='' href='ManageSalaries_edit_code.php?salary_id=" . $row['salary_id'] . "'><i class='fa fa-edit' style='font-size:24px;color:blue'></i></th> <th><A class='' href='ManageSalaries_code.php?salary_id=" . $row['salary_id'] . "'><i class='fa fa-trash-o' style='font-size:24px;color:red'></i></A></th>";
					echo "<td>" . $row['salary_id'] . "</td>";
					echo "<td>" . $row['employee_id'] . "</td>";
					echo "<td>" . $row['department_id'] . "</td>";
					echo "<td>" . $row['salary_date'] . "</td>";
					echo "<td>" . $row['salary_amount'] . "</td>";
					echo "</tr>";
				}
				echo "</tbody>";
				
				echo "</table></div>";
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