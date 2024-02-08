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
    <center><h4><b><p style="color: green;"> Edit Salaries</p></b></h4></center>
        <form name='f1' method='post' action="#" enctype="">
    	    <div class="container">
                	<?php 
		
include '../grocery_connections.php'; 
			
$qry="select salary_id,employee_id,department_id,salary_date,salary_amount from salary where salary_id=		'".$_REQUEST['salary_id']."'";
$rs=mysqli_query($conn, $qry);
if (mysqli_num_rows($rs) > 0) 
{
	$i=1;
	while($row = mysqli_fetch_assoc($rs))
		{
		echo "<div class='row'>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Salary Id</label>";
		echo "<input type='text' class='form-control' name='salary_id' value='".$row['salary_id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Employee Id</label>";
		echo "<input type='text' class='form-control' name='employee_id' value='".$row['employee_id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Department Id</label>";
		echo "<input type='text' class='form-control' name='department_id' value='".$row['department_id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Salary Date</label>";
		echo "<input type='text' class='form-control' name='salary_date' value='".$row['salary_date']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Salary Amount</label>";
		echo "<input type='text' class='form-control' name='salary_amount' value='".$row['salary_amount']."'>";
		echo "</div>";
	echo "</div><hr></hr>";
		}
}
else
{

	
}

?>
            <br>
    	    <center><button type="submit" name='submit' class="btn btn-default btn-success">Submit</button></center>
       </form>
       
       <form name='f2' method='post' action='#'>
            			
	<?php
			if(isset($_REQUEST['submit']))
			{
				
			
	$updateqry="update salary set salary_id='".$_REQUEST['salary_id']."' , employee_id='".$_REQUEST['employee_id']."' , department_id='".$_REQUEST['department_id']."' , salary_date='".$_REQUEST['salary_date']."' , salary_amount='".$_REQUEST['salary_amount']."'  where salary_id='".$_REQUEST['salary_id']."'";;
			
	if (mysqli_query($conn, $updateqry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record updated successfully');window.location='ManageSalaries.php';</script>";
			
	}
			
}mysqli_close($conn);
?>
       </form>
    </div>
</body>
</html>
