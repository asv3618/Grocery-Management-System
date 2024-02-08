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
	?>
	<br>
	<div class="container card" style="background-color:#D5DBDB">
		<h3><b>
				<center><p style="color:green;"> Edit Employee</p></center>
			</b></h3>
		<form name='f1' method='post' action="#" enctype="">
			<div class="container">
				<?php

				include '../grocery_connections.php';


				$qry = "select employee_id,first_name,last_name,gender,age,mobile,email,address,emp_pic,department_id,role,password from employee where employee_id=		'" . $_REQUEST['employee_id'] . "'";
				$rs = mysqli_query($conn, $qry);
				if (mysqli_num_rows($rs) > 0) {
					$i = 1;
					while ($row = mysqli_fetch_assoc($rs)) {
						echo "<div class='row'>";
						echo "<div class='col-sm-3'>";
						echo "<label class='form-check-label'>Employee Id</label>";
						echo "<input type='text' class='form-control' name='employee_id' value='" . $row['employee_id'] . "'>";
						echo "</div>";
						echo "<div class='col-sm-3'>";
						echo "<label class='form-check-label'>First Name</label>";
						echo "<input type='text' class='form-control' name='first_name' value='" . $row['first_name'] . "'>";
						echo "</div>";
						echo "<div class='col-sm-3'>";
						echo "<label class='form-check-label'>Last Name</label>";
						echo "<input type='text' class='form-control' name='last_name' value='" . $row['last_name'] . "'>";
						echo "</div>";
						echo "<div class='col-sm-3'>";
						echo "<label class='form-check-label'>Gender</label>";
						echo "<input type='text' class='form-control' name='gender' value='" . $row['gender'] . "'>";
						echo "</div>";
						echo "<div class='col-sm-3'>";
						echo "<label class='form-check-label'>Age</label>";
						echo "<input type='text' class='form-control' name='age' value='" . $row['age'] . "'>";
						echo "</div>";
						echo "<div class='col-sm-3'>";
						echo "<label class='form-check-label'>Mobile</label>";
						echo "<input type='text' class='form-control' name='mobile' value='" . $row['mobile'] . "'>";
						echo "</div>";
						echo "<div class='col-sm-3'>";
						echo "<label class='form-check-label'>Email</label>";
						echo "<input type='text' class='form-control' name='email' value='" . $row['email'] . "'>";
						echo "</div>";
						echo "<div class='col-sm-3'>";
						echo "<label class='form-check-label'>Address</label>";
						echo "<input type='text' class='form-control' name='address' value='" . $row['address'] . "'>";
						echo "</div>";
						echo "<div class='col-sm-3'>";
						echo "<label class='form-check-label'>Emp Pic</label>";
						echo "<input type='text' class='form-control' name='emp_pic' value='" . $row['emp_pic'] . "'>";
						echo "</div>";
						echo "<div class='col-sm-3'>";
						echo "<label class='form-check-label'>Department Id</label>";
						echo "<input type='text' class='form-control' name='department_name' value='" . $row['department_id'] . "'>";
						echo "</div>";
						echo "<div class='col-sm-3'>";
						echo "<label class='form-check-label'>Role</label>";
						echo "<input type='text' class='form-control' name='role' value='" . $row['role'] . "'>";
						echo "</div>";
						echo "<div class='col-sm-3'>";
						echo "<label class='form-check-label'>Password</label>";
						echo "<input type='text' class='form-control' name='password' value='" . $row['password'] . "'>";
						echo "</div>";
						echo "</div><hr></hr>";
					}
				} else {
				}

				?>
				<br>
				<center><button type="submit" name='submit' class="btn btn-default btn-success">Submit</button></center>
		</form>

		<form name='f2' method='post' action='#'>

			<?php
			if (isset($_REQUEST['submit'])) {


				$updateqry = "update employee set employee_id='" . $_REQUEST['employee_id'] . "' , first_name='" . $_REQUEST['first_name'] . "' , last_name='" . $_REQUEST['last_name'] . "' , gender='" . $_REQUEST['gender'] . "' , age='" . $_REQUEST['age'] . "' , mobile='" . $_REQUEST['mobile'] . "' , email='" . $_REQUEST['email'] . "' , address='" . $_REQUEST['address'] . "' , emp_pic='" . $_REQUEST['emp_pic'] . "' , department_id='" . $_REQUEST['department_id'] . "' , role='" . $_REQUEST['role'] . "' , password='" . $_REQUEST['password'] . "'  where employee_id='" . $_REQUEST['employee_id'] . "'";;

				if (mysqli_query($conn, $updateqry)) {

					echo "<script language='javascript'>window.alert('Record updated successfully');window.location='ManageEmployee.php';</script>";
				}
			}
			mysqli_close($conn);
			?>
		</form>
	</div>
</body>

</html>