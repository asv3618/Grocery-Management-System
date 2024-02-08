<?php
session_start();
 ?>
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
 ?><br>
<div class="container card" style="background-color:#D5DBDB">
<center><h3><b><p style="color:green;"> View & Manage Categories</p></b></h3></center>
    <form name='f1' method='post' action="#" enctype="">
        <?php 

include '../grocery_connections.php'; 
$qry="select category_id,category_name from category";
$rs=mysqli_query($conn, $qry);
if (mysqli_num_rows($rs) > 0) 
{
	echo "<table class='table table-sm table-striped' id='table_id'>";
	echo "<thead class='table-dark'>";
	echo "<tr><th></th><th></th>";
	echo "<th>Category Id</th>";
	echo "<th>Category Name</th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	while($row = mysqli_fetch_assoc($rs))
	{			
		echo "<tr><th><A class='' href='ManageCategories_edit_code.php?category_id=".$row['category_id']."'><i class='fa fa-edit' style='font-size:24px;color:blue'></i></th> <th><A class='' href='ManageCategories_code.php?category_id=".$row['category_id']."'><i class='fa fa-trash-o' style='font-size:24px;color:red'></i></A></th>";
		echo "<td>".$row['category_id']."</td>";
		echo "<td>".$row['category_name']."</td>";
		echo "</tr>";
	}
	echo "</tbody>";
	
	echo "</table></div>";
}
else
{

	echo "<h2>No Categories Found</h2>";
	echo "<h4;>Please Add New Category Details to Manage them here</h4>";
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
