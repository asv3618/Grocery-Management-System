<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include 'groceryfiles/groceryfiles.php';
	include '../grocery_connections.php';
	?>
</head>

<body >

	<?php
	include 'Admin_Home_Menu.php';
	?>
	<br>
	<div class="container card" style="background-color: #D5DBDB">
<center><h3><b><p style="color:green;"> View & Manage Employees</p></b></h3></center>
		<form name='f1' method='post' action="#" enctype="">
			<?php
			$qry = "select employee_id,first_name,last_name,gender,age,mobile,email,address,emp_pic,department_id,role,password from employee";
			$rs = mysqli_query($conn, $qry);
			if (mysqli_num_rows($rs) > 0) {
				echo "<table class='table table-sm table-striped' id='table_id'>";
				echo "<thead class='table-dark'>";
				echo "<tr><th></th><th></th>";
				echo "<th>Employee Id</th>";
				echo "<th>First Name</th>";
				echo "<th>Last Name</th>";
				echo "<th>Gender</th>";
				echo "<th>Age</th>";
				echo "<th>Mobile</th>";
				echo "<th>Email</th>";
				echo "<th>Address</th>";
				echo "<th>Emp Pic</th>";
				echo "<th>Department Id</th>";
				echo "<th>Role</th>";
				echo "<th>Password</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc($rs)) {
					echo "<tr><th><A class='' href='ManageEmployee_edit_code.php?employee_id=" . $row['employee_id'] . "'><i class='fa fa-edit' style='font-size:24px;color:blue'></i></A></i></th> <th><A class='' href='ManageEmployee_code.php?employee_id=" . $row['employee_id'] . "'><i class='fa fa-trash-o' style='font-size:24px;color:red'></i></A></th>";
					echo "<td>" . $row['employee_id'] . "</td>";
					echo "<td>" . $row['first_name'] . "</td>";
					echo "<td>" . $row['last_name'] . "</td>";
					echo "<td>" . $row['gender'] . "</td>";
					echo "<td>" . $row['age'] . "</td>";
					echo "<td>" . $row['mobile'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "<td>" . $row['address'] . "</td>";
					echo "<td><img src='uploads/" . $row['emp_pic'] . "' width='100px' height='100px'></img></td>";
					echo "<td>" . $row['department_id'] . "</td>";
					echo "<td>" . $row['role'] . "</td>";
					echo "<td>" . $row['password'] . "</td>";
					echo "</tr>";
				}
			} 
			else{
				echo "<h2>No Employees Found</h2>";
				echo "<h4;>Please Add New Employee Details to Manage them here</h4>";}

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