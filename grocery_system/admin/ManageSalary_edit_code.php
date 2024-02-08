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
    <div class="container" style="background-color:#F7DC6F"><br>
         <h4><b><p style="color: red;"> Edit Salary</p></b></h4> 
        <form name='f1' method='post' action="#" enctype="">
    	    <div class="container">
                	<?php 
		
include '../grocery_connections.php';
			
$qry="select salary_id,salary_date,account_number,salary_amount from salary where salary_id=		'".$_REQUEST['salary_id']."'";
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
		echo "<label class='form-check-label'>Salary Date</label>";
		echo "<input type='text' class='form-control' name='salary_date' value='".$row['salary_date']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Account Number</label>";
		echo "<input type='text' class='form-control' name='account_number' value='".$row['account_number']."'>";
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
				
			
	$updateqry="update salary set salary_id='".$_REQUEST['salary_id']."' , salary_date='".$_REQUEST['salary_date']."' , account_number='".$_REQUEST['account_number']."' , salary_amount='".$_REQUEST['salary_amount']."'  where salary_id='".$_REQUEST['salary_id']."'";;
			
	if (mysqli_query($conn, $updateqry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record updated successfully');window.location='ManageSalary.php';</script>";
			
	}
			
}mysqli_close($conn);
?>
       </form>
    </div>
</body>
</html>
