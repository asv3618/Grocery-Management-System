<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <?php
	include 'groceryfiles/groceryfiles.php';
  ?>
</head>
<body class='bg' style="background-color:#fc9cac ;background-image: url(images/greenpast.jpg)">

<?php 
include 'Admin_Home_Menu.php';
 ?><br>
<div class="container card" style="background-color:#F7DC6F"><br>
    <h4><b><p style="color: red;"> Manage Salaries</p></b></h4>
    <form name='f1' method='post' action="#" enctype="">
        <?php 

$dbhost = 'localhost';

$dbuser = 'root';

$dbpass = '';

$dbname = 'groceriesdb';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(! $conn ){
	die('Could not connect: ' . mysqli_error());
}?>

        <br>
    </form>
   
   
   <div class="container " style='margin-top:-40px'>
        <?php 

$dbhost = 'localhost';

$dbuser = 'root';

$dbpass = '';

$dbname = 'groceriesdb';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(! $conn ){
	die('Could not connect: ' . mysqli_error());
}?>

<?php
$qry="select salary_id,salary_date,account_number,salary_amount from salary";
$rs=mysqli_query($conn, $qry);
if (mysqli_num_rows($rs) > 0) 
{
	echo "<br><br><table class='table table-sm table-striped' id='table_id'>";
	echo "<thead class='table-light'>";
	echo "<tr><th></th><th></th>";
	echo "<th>Salary Id</th>";
	echo "<th>Salary Date</th>";
	echo "<th>Account Number</th>";
	echo "<th>Salary Amount</th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	while($row = mysqli_fetch_assoc($rs))
		{			
	
			
	echo "<tr><th><A class='btn btn-sm btn-success' href='ManageSalary_edit_code.php?salary_id=".$row['salary_id']."'>Edit</th> <th><A class='btn btn-sm btn-danger' href='ManageSalary_code.php?salary_id=".$row['salary_id']."'>Delete</A></th>";
		 echo "<td>".$row['salary_id']."</td>";
		 echo "<td>".$row['salary_date']."</td>";
		 echo "<td>".$row['account_number']."</td>";
		 echo "<td>".$row['salary_amount']."</td>";
	echo "</tr>";
		}
	echo "
	</tbody>";
	
}
else
{

	echo "<h1>Records Not Found</h1>";
}

mysqli_close($conn);
?>
   </div>
   <br>
</div>

<script>
		$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
		
</body>
</html>
