<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include 'groceryfiles/groceryfiles.php';
	include '../grocery_connections.php';
	?>
	<script>
		function payClicked(radio) {
			if (radio.checked) {
				if (radio.id == 'cash') {
					document.getElementById('card_type').disabled = true;
					document.getElementById('card_number').disabled = true;
					document.getElementById('expiry_date').disabled = true;
					document.getElementById('cvv').disabled = true;
				} else {
					document.getElementById('card_type').disabled = false;
					document.getElementById('card_number').disabled = false;
					document.getElementById('expiry_date').disabled = false;
					document.getElementById('cvv').disabled = false;
				}
			}
		}
	</script>

</head>

<body>

	<?php
	include 'Customers_Home_Menu.php';
	$flag = false;
	?>
	<br>
	<div class="container card" style="background-color: #D5DBDB">
		<h2 style='color:green'>Products in Cart</h2>


		<form name='f1' method='post' action='payment.php'>
			<div class='row'>
				<div class='col-10'>
					<table class='table table-sm table-light'>
						<tr>
							<th></th>
							<th>S.No</td>
							<th>Product</td>
							<th>Price</td>
							<th>Points</th>
							<th>Quantity</th>
						</tr>
						<tbody>
							<?php
							$sql = "select cart_id, product_id from cart where customer_id='" . $_SESSION['customer_id'] . "'";
							$result = mysqli_query($conn, $sql);

							$total = 0;
							$total_points = 0;
							$sno = 1;
							while ($r = mysqli_fetch_assoc($result)) {
								$flag = true;
								echo "<tr><td><A class='btn btn-sm btn-danger' href='remove_from_cart.php?cart_id=" . $r['cart_id'] . "'>Delete</A></td>";
								echo "<td>$sno</td>";
								$sql1 = "select product_id,product_name,category_name,description,price,product_pic,reward_points from product where product_id ='" . $r['product_id'] . "'";
								$result1 = mysqli_query($conn, $sql1);
								while ($r1 = mysqli_fetch_assoc($result1)) {
									echo "<td>" . $r1['product_name'] . "," . $r1['description'] . "</td><td>" . $r1['price'] . "</td><td>" . $r1['reward_points'] . "</td>";
									$total = $total + $r1['price'];
									$total_points += $r1['reward_points'];
								}
								echo "<td><input type='number' class='form-control' name='q$sno' id='q$sno' style='width:100px' value='1'/></td>";
								echo "</tr>";
								$sno++;
							}
							echo "<tr><td colspan='2' align='right'><b>Total Bill</b></td><td  align='right'><b>" . $total . "</b></td> <td>&nbsp;</td> <td ><b>$total_points</b> </td><td>&nbsp;</td></tr>";
							echo "</tbody>";
							echo "</table>";

							if ($sno == 0) {
								return;
							}
							mysqli_close($conn);
							?>
				</div>
			</div>
			<br>


			<h4>Shipment Address</h4>
			<div class='row'>
				<div class='col-sm-4'>
					Address<br>
					<textarea class='form-control' rows='3' name='shipping_address' required></textarea>
				</div>

				<div class='col-sm-4'>
					Zipcode<br>
					<input type='number' name='zipcode' class='form-control' required>
				</div>
				<div class='col-sm-4'>
					Mobile<br>
					<input type='number' name='mobile' class='form-control' required>
				</div>

			</div>
			<hr />
			<div class='row'>
				<h3>Payment Mode</h3>
				&nbsp;&nbsp;&nbsp;<input type='radio' class='form-check-input' id='card' name='paytype' value='card' onclick="payClicked(this)">Card payment
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type='radio' class='form-check-input' id='cash' name='paytype' value='cash' onclick="payClicked(this)" selected>Cash on delivery
				
			<hr/>	
			</div>

			<div class='row'>
				<h3>Card Details</h3>
				<div class='col-sm-4'>
					Card Type<br>
					<select name='card_type' id='card_type' class='form-control'>
						<option>debit</option>
						<option>credit</option>
					</select>
				</div>
				<div class='col-sm-4'>
					Card Number<br>
					<input type='number' id='card_number' name='card_number' class='form-control' required>
				</div>
				<div class='col-sm-4'>
					Expiry Date<br>
					<input type='text' id='expiry_date' name='expiry_date' class='form-control' required>
				</div>
				<div class='col-sm-4'>
					CVV<br>
					<input type='number' id='cvv' name='cvv' class='form-control' required>
				</div>
			</div>
			<div class='row'>
				<div class='col-sm-4'>
					<br>
					<?php if ($flag == false) {
						echo "<input type='submit' name='submit' value='Do Payment' class='btn btn-info form-control' disabled>";
					} else {
						echo "<input type='submit' name='submit' value='Do Payment' class='btn btn-info form-control'>";
					}
					?>

				</div>
			</div>

		</form>


	</div>

	</div>

	<script>
		document.getElementById('card').checked = true;
	</script>
</body>

</html>