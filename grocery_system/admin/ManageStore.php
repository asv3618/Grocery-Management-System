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
		<center><p style="color: green;"> View & Manage Stores</p></center>
			</b></h4>
		<form name='f1' method='post' action="#" enctype="">


			<br>
		</form>


		<div class="container" style='margin-top:-40px'>


			<?php
			$qry = "select store_Id,store_name,location,mobile from store";
			$rs = mysqli_query($conn, $qry);
			if (mysqli_num_rows($rs) > 0) {
				echo "<table class='table table-sm table-striped' id='table_id'>";
				echo "<thead class='table-dark'>";
				echo "<tr><th></th><th></th>";
				echo "<th>Store Id</th>";
				echo "<th>Store Name</th>";
				echo "<th>Location</th>";
				echo "<th>Mobile</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc($rs)) {


					echo "<tr><th><A class='' href='ManageStore_edit_code.php?store_Id=" . $row['store_Id'] . "'><i class='fa fa-edit' style='font-size:24px;color:blue'></i></th> <th><A class='' href='ManageStore_code.php?store_Id=" . $row['store_Id'] . "'><i class='fa fa-trash-o' style='font-size:24px;color:red'></i></A></th>";
					echo "<td>" . $row['store_Id'] . "</td>";
					echo "<td>" . $row['store_name'] . "</td>";
					echo "<td>" . $row['location'] . "</td>";
					echo "<td>" . $row['mobile'] . "</td>";
					echo "</tr>";
				}
				echo "
	</div>";
			} else {
				
	echo "<h2>No Stores Found</h2>";
	echo "<h4;>Please Add New Store Details to Manage them here</h4>";
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