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
 ?><br>
<div class="container card" style="background-color:#D5DBDB"><br>
    <center><h4><b><p style="color: green;"> View Rewards</p></b></h4></center>
    <form name='f1' method='post' action="#" enctype="">
        <?php 

include '../grocery_connections.php'; 
$qry="select reward_id,customer_id,order_no,reward_points from rewards";
$rs=mysqli_query($conn, $qry);
if (mysqli_num_rows($rs) > 0) 
{
	echo "<table class='table table-sm table-striped' id='table_id'>";
	echo "<thead class='table-dark'>";
	echo "<tr><th></th><th></th>";
	echo "<th>Reward Id</th>";
	echo "<th>Customer Id</th>";
	echo "<th>Order No</th>";
	echo "<th>Reward Points</th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	while($row = mysqli_fetch_assoc($rs))
		{			
	
			
	echo "<tr><th><A class='' href='ManageRewards_edit_code.php?reward_id=".$row['reward_id']."'><i class='fa fa-edit' style='font-size:24px;color:blue'></i></th> <th><A class='' href='ManageRewards_code.php?reward_id=".$row['reward_id']."'><i class='fa fa-trash-o' style='font-size:24px;color:red'></i></A></th>";
		 echo "<td>".$row['reward_id']."</td>";
		 echo "<td>".$row['customer_id']."</td>";
		 echo "<td>".$row['order_no']."</td>";
		 echo "<td>".$row['reward_points']."</td>";
	echo "</tr>";
		}
	echo "
	
	
</div>";
}
else
{

	
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
