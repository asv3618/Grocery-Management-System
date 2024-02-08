<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include 'groceryfiles/groceryfiles.php';
	?>
</head>

<body class='bg' style="background-color:# ;background-image: url(images/.jpg)">

	<?php
	include 'Home_Menu.php';
	?><br>
	<div class="container" style="background-color: #ffffff;width:60%">

		<form name='f1' method='post' action="Admin_Login_code.php" enctype="">

			<div class="row">
				<div class="col-sm-4">
					<img src='images/admlogo.png' width='100%' height='100%'><br>
				</div>
				<div class="col-sm-4"><br>
					<center>
						<h4><b>
								<p style="color: black;"> Admin Login</p>
							</b></h4>
					</center>

					<div class='row'>
						<div class='col-md-12'>
							<label for='username'>Username</label>
							<input type='text' class='form-control' id='username' placeholder='Enter username' name='username' required>
						</div>
					</div>
					<div class='row'>
						<div class='col-md-12'>
							<label for='password'>Password</label>
							<input type='password' class='form-control' id='password' placeholder='Enter password' name='password' required>
						</div>
					</div>

					<br>
					<button type="submit" class="btn btn-default btn-success">Login</button><br><br>
					<br>

					<?php
					if (isset($_REQUEST['msg'])) {
						echo '<br><h2>Invalid Username/Password</h2>';
					} ?>

				</div>
			</div>
		</form>
</body>
</html>