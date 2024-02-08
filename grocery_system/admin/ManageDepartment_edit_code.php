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
    <div class="container card" style="background-color:#D5DBDB"><br>
       <h4><b><p style="color: red;"> Edit Deaprtment</p></b></h4> 
        <form name='f1' method='post' action="#" enctype="">
    	    <div class="container">
                	<?php 
		
include '../grocery_connections.php'; 
			
$qry="select department_id,department_name,designation,salary from department where department_id=		'".$_REQUEST['department_id']."'";
$rs=mysqli_query($conn, $qry);
if (mysqli_num_rows($rs) > 0) 
{
	$i=1;
	while($row = mysqli_fetch_assoc($rs))
		{
		echo "<div class='row'>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Department Id</label>";
		echo "<input type='text' class='form-control' name='department_id' value='".$row['department_id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Department Name</label>";
		echo "<input type='text' class='form-control' name='department_name' value='".$row['department_name']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Designation</label>";
		echo "<input type='text' class='form-control' name='designation' value='".$row['designation']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Salary</label>";
		echo "<input type='text' class='form-control' name='salary' value='".$row['salary']."'>";
		echo "</div>";
	echo "</div><hr></hr>";
		}
}
else
{

	echo "<h1>Records Not Found</h1>";
}

?>
            <br>
    	    <button type="submit" name='submit' class="btn btn-default btn-success">Submit</button><br><br>
       </form>
       
       <form name='f2' method='post' action='#'>
            			
	<?php
			if(isset($_REQUEST['submit']))
			{
				
			
	$updateqry="update department set department_id='".$_REQUEST['department_id']."' , department_name='".$_REQUEST['department_name']."' , designation='".$_REQUEST['designation']."' , salary='".$_REQUEST['salary']."'  where department_id='".$_REQUEST['department_id']."'";;
			
	if (mysqli_query($conn, $updateqry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record updated successfully');window.location='ManageDepartment.php';</script>";
			
	}
			
}mysqli_close($conn);
?>
       </form>
    </div>
</body>
</html>
