<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include 'groceryfiles/groceryfiles.php';
	include '../grocery_connections.php';
	?><br>
</head>

<body>

	<?php
		include 'Customers_Home_Menu.php';
	?>
	<br>
	<div class="container card" style="background-color:#D5DBDB">
		<h4><b>
				<center><p style="color: green;"> Reviews</p></center>
			</b></h4>
		<form name='f1' method='post' action="#" enctype="">
			<?php
			$qry = "select review_id,review_date,customer_id,rating,review_comments from reviews";
			$rs = mysqli_query($conn, $qry);
			if (mysqli_num_rows($rs) > 0) {
				echo "<table class='table table-sm table-striped' id='table_id'>";
				echo "<thead class='table-light'>";
				echo "<tr><th></th>";
				echo "<th>Review Id</th>";
				echo "<th>Review Date</th>";
				echo "<th>Customer Id</th>";
				echo "<th>Rating</th>";
				echo "<th>Review Comments</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc($rs)) {
					echo "<tr><th><A class='' href='ManageReviews_code.php?review_id=" . $row['review_id'] . "'><i class='fa fa-trash-o' style='font-size:24px;color:red'></i></A></th>";
					echo "<td>" . $row['review_id'] . "</td>";
					echo "<td>" . $row['review_date'] . "</td>";
					echo "<td>" . $row['customer_id'] . "</td>";
					echo "<td>" . $row['rating'] . "</td>";
					echo "<td>" . $row['review_comments'] . "</td>";
					echo "</tr>";
				}
			} 
			else{echo "<h3>No reviews are posted yet!</h3>";}

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