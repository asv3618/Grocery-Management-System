<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include 'groceryfiles/groceryfiles.php';
	include '../grocery_connections.php';
	include './groceryfiles/headerFile.php';
	?>
</head>

<body>

	<?php
	include 'Customers_Home_Menu.php';
	?>
	<br>
	<div class="container card" style="background-color:#D5DBDB">
		<h4><b>
				<center><p style="color: green;">WishList</p></center>
			</b></h4>
		<form name='f1' method='post' action="#" enctype="">
			<?php
			$qry = "select wishlist_id,customer_id,product_id,date_selected from wishlist where customer_id ='".$_SESSION['customer_id']."'";
			$rs = mysqli_query($conn, $qry);
			if (mysqli_num_rows($rs) > 0) {
				echo "<table class='table table-sm table-striped' id='table_id'>";
				echo "<thead class='table-dark'>";
				echo "<tr><th></th>";
				echo "<th>Wishlist Id</th>";
				
				echo "<th>Product Id</th>";
				echo "<th>Date Selected</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc($rs)) {
					$s = getProduct($conn, $row['product_id']);
					$ss = explode (',', $s);
					echo "<tr><th><A class='' href='ManageWishtList_code.php?wishlist_id=" . $row['wishlist_id'] . "'><i class='fa fa-trash-o' style='font-size:24px;color:red'></i></A></th>";
					echo "<td>" . $row['wishlist_id'] . "</td>";
					
					echo "<td><img src='../admin/uploads/".$ss[3]."' width='60px' height='60px'><br><b>".$ss[0].",".$ss[1].",".$ss[2]."</b>";
					echo "<br><A href='add_to_cart.php?product_id=" . $row['product_id'] . "' class='btn btn-sm btn-outline-primary'>Add to Cart</A>";
					echo "<td>" . $row['date_selected'] . "</td>";
					echo "</tr>";
				}
			} else {
				echo "<h3>No items are added to the Wishlist yet!</h3>";
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