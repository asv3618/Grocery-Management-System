<?php session_start(); ?>
<html lang="en">

<head>
	<?php
	include 'groceryfiles/groceryfiles.php';
	include '../grocery_connections.php';
	?>

</head>

<body>

	<?php
	include 'Customers_Home_Menu.php';
	?><br>
	<section>
		<div class="container card" style="background-color:#D5DBDB"><br>
			<div class="row">

				<div class="col-md-10">
					<h4><b>
							<center><p style="color: green;"> New Reviews</p></center>
						</b></h4> <br>
					<form name='f1' method='post' action="NewReviews_code.php" enctype="multipart/form-data">
					<input type='hidden' name='product_id' value="<?php echo $_REQUEST['product_id'];?>">
					<div class='row'>
							
							<div class='col-md-5'>
								<?php echo "<h4>Product Name:".$_REQUEST['product_name'];?>
							</div>
					</div>

						<div class='row'>
							
							<div class='col-md-5'>
								<label for='rating'>Rating</label>
								<select name='rating' class='form-control'>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>
						<div class='row'>
							<div class='col-md-5'>
								<label for='review_comments'>Review Comments</label>
								<textarea rows='3' class='form-control' id='review_comments' placeholder='Review Comments' name='review_comments' required></textarea>
							</div>
						</div>
						<br>
						<div class="form-row">
							<center><input type="submit" name="submit" class="btn btn-success" value="Add Review"><br></center>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

</body>

</html>