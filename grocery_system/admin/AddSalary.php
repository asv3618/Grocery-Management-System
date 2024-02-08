<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include 'groceryfiles/groceryfiles.php';
	include '../grocery_connections.php';
	?>
</head>

<body style="background-color: #ffffff;background-image: url(images/)">

	<?php
	include 'Admin_Home_Menu.php';
	?>

	<br>

	<div class="container card" style="background-color:#D5DBDB"><br>
		<center>
			<h4><b>
					<p style="color: green;"> Add Salary</p>
				</b></h4>
		</center>
		<form name='f1' method='post' action="AddSalary_code.php" enctype="multipart/form-data">

			<div class="row">
				<!--<div class="col-sm-6"><br>
					<img src="images/.jpg" width="90%" alt="add image path">
				</div>-->

				<div class="col-sm-6">

					<div class='row'>
						<div class='col-md-6'>
							<label for='employee_id'>Employee Id</label>
							<select class='form-control' id='employee_id' name='employee_id' required>
								<?php $qry = 'select distinct employee_id from employee';
								$rs = mysqli_query($conn, $qry);
								while ($row = mysqli_fetch_assoc($rs)) {
									$value = $row['employee_id'];
									echo "<option>$value</option>";
								}
								?>
							</select>
						</div>
						<div class='col-md-6'>
							<label for='department_id '>Department Id </label>
							<select class='form-control' id='department_id ' name='department_id ' required>
								<?php $qry = 'select distinct department_id from department';
								$rs = mysqli_query($conn, $qry);
								while ($row = mysqli_fetch_assoc($rs)) {
									$value = $row['department_id'];
									echo "<option>$value</option>";
								}
								?>
							</select>
						</div>
					</div>
					<div class='row'>
						<div class='col-md-6'>
							<label for='salary_date'>Salary Date</label>
							<input type='date' class='form-control' id='salary_date' placeholder='Salary Date' name='salary_date' required>
						</div>
						<div class='col-md-6'>
							<label for='salary_amount'>Salary Amount</label>
							<input type='text' class='form-control' id='salary_amount' placeholder='Salary Amount' name='salary_amount' required>
						</div>
					</div>

					<br>
					<center><button type="submit" class="btn btn-default btn-success">Add Salary</button></center>
				</div>
				<br>

			</div>



		</form>
	</div>


</body>

</html>