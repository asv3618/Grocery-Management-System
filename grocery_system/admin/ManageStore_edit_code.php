<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
	include 'groceryfiles/groceryfiles.php';
	include '../grocery_connections.php';
  ?>
</head>
<body">

<?php 
include 'Admin_Home_Menu.php';
 ?><br>
    <div class="container card" style="background-color:#D5DBDB"><br>
     <center><h4><b><p style="color: green;"> Edit  Store</p></b></h4></center>
        <form name='f1' method='post' action="#" enctype="">
    	    <div class="container">
                	<?php 
$qry="select store_Id,store_name,location,mobile from store where store_Id=		'".$_REQUEST['store_Id']."'";
$rs=mysqli_query($conn, $qry);
if (mysqli_num_rows($rs) > 0) 
{
	$i=1;
	while($row = mysqli_fetch_assoc($rs))
		{
		echo "<div class='row'>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Store Id</label>";
		echo "<input type='text' class='form-control' name='store_Id' value='".$row['store_Id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Store Name</label>";
		echo "<input type='text' class='form-control' name='store_name' value='".$row['store_name']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Location</label>";
		echo "<input type='text' class='form-control' name='location' value='".$row['location']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Mobile</label>";
		echo "<input type='text' class='form-control' name='mobile' value='".$row['mobile']."'>";
		echo "</div>";
	echo "</div><hr></hr>";
		}
}
else
{

	
}

?>
            <br>
    	    <center><button type="submit" name='submit' class="btn btn-default btn-success">Submit</button><br><br></center>
       </form>
       
       <form name='f2' method='post' action='#'>
            			
	<?php
			if(isset($_REQUEST['submit']))
			{
				
			
	$updateqry="update store set store_Id='".$_REQUEST['store_Id']."' , store_name='".$_REQUEST['store_name']."' , location='".$_REQUEST['location']."' , mobile='".$_REQUEST['mobile']."'  where store_Id='".$_REQUEST['store_Id']."'";;
			
	if (mysqli_query($conn, $updateqry))
			
	{
			
		echo "<script language='javascript'>window.alert('Record updated successfully');window.location='ManageStore.php';</script>";
			
	}
			
}mysqli_close($conn);
?>
       </form>
    </div>
</body>
</html>
