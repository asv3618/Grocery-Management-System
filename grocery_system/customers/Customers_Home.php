<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'groceryfiles/groceryfiles.php';
  include '../grocery_connections.php';
  ?>
  <style>
    .card {
      transition: transform 0.3s;
      border: 1px solid #29DB90;
      box-shadow: 0 4px 8px 0 rgba(225, 225, 225, 0.937);
      transition: 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
      border: 1px solid yellow;
      box-shadow: 0 8px 8px rgba(21, 209, 134, 0.2);
      background-color: rgb(245, 245, 245);
    }
  </style>
</head>

<body>

  <?php
  include 'Customers_Home_Menu.php';
  include './groceryfiles/headerFile.php';
  ?>
  <!--
  <div class="jumbotron">
    <div class="container text-center">
      <center>
        <h3><b>
            <p style="color: yellow;"> Welcome to Customer's Home </p>
          </b></h3>
      </center> <br>

    </div>
  </div>
-->

  <?php
  if (isset($_REQUEST['n']) && $_REQUEST['n'] == '1') {

  ?>
    <div class="alert alert-success" role="alert" id="success-alert">
      Product added to cart!
    </div>
  <?php
  }


  if (isset($_REQUEST['n']) && $_REQUEST['n'] == '2') {

  ?>
    <div class="alert alert-success" role="alert" id="success-alert">
      Order placed successfully.
    </div>
  <?php
  }
  ?>
  <div class="container-fluid">
    <br>
    <form name='f1' method='post' action='#'>
      <div class='row'>
        <div class='col-sm-4'>

          <input type='text' name='search' placeholder="Search Groceries" class='form-control'>

        </div>
        <div class='col-sm-2'>

          <input type='submit' name='submit' value='Search' class='btn form-control btn-danger'>
        </div>
      </div>
    </form>
    <br>
    <div class='row'>

      <?php
      if (isset($_REQUEST['submit'])) {
        $qry = "select product_id,category_name,product_name,description,price,product_pic,reward_points,stock_quantity from product where product_name like '%" . $_REQUEST['search'] . "%' or category_name like '%" . $_REQUEST['search'] . "%' or description like '%" . $_REQUEST['search'] . "%' order by product_name";
      } else
        $qry = "select product_id,category_name,product_name,description,price,product_pic,reward_points,stock_quantity from product";

      $rs = mysqli_query($conn, $qry);
      $i = 1;
      while ($row = mysqli_fetch_assoc($rs)) {
      ?>
        <div class='col-sm-3'>
          <div class="card mb-3" style="max-width: 18rem;">
            <img class="card-img-top" src="../admin/uploads/<?php echo $row['product_pic']; ?>" alt="Pic not found" style="width:100%;height:200px;border:1px solid #E7EBEA;">

            <div class="card-body">
              <h5 class="card-title"><b><?php echo $row['product_name']; ?></b></h5>
              <p class="card-text"><?php echo $row['description']; ?><br>
                Price:<?php echo $row['price']; ?> <br>
                <span class='text-danger'>Points</span>: <?php echo $row['reward_points']; ?>

              </p>
              <?php
              $rating = getProductRating($conn, $row['product_id']);
              echo "<b>Rating:</b><span style='color:red;font-size:25px'>";

              displayStarRating($rating);
              echo "</span>";
              echo "<br><A href='showReviews.php?product_id=".$row['product_id']."'  class='btn btn-primary'>Reviews</A>";
              if ($row['stock_quantity'] > 0) {
                echo "<b><p class='text-success'>Stock Available</p></b>";
                echo "<A href='add_to_cart.php?product_id=" . $row['product_id'] . "' class='btn btn-sm btn-outline-primary'>Add to Cart</A>";
              } else {
                echo "<b><p class='text-danger'>No Stock</p></b>";
                echo "<br>";
              }
              ?>
           
           &nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<A href='NewWishtList_code.php?product_id=<?php echo $row['product_id'];?>'<i class="fa fa-heart" style="margin-top:15px;font-size:20px;color:red"></i></a>
           
            </div>
          </div>
        </div>

      <?php
      }

      ?>

    </div>
  </div>
  </div>




 
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

     
      <div class="modal-header">
        <h4 class="modal-title">Reviews</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      
      <div class="modal-body">
     	<?php
			$qry = "select review_id,review_date,customer_id,rating,review_comments from reviews";
			$rs = mysqli_query($conn, $qry);
			if (mysqli_num_rows($rs) > 0) {
				echo "<table class='table table-sm table-striped'>";
			
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc($rs)) {
					echo "<tr><td>Date:" . $row['review_date'];
					
					echo "<br>Rating: " . $row['rating'] . "";
					echo "<br>Comment: " . $row['review_comments'] . "</td>";
					echo "</tr>";
				}
        echo "</tbody></table>";
			} 

			mysqli_close($conn);
			?>
	
        
      </div>

     
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>





  <script>
    $('#success-alert').css('display', 'block');
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
      $("#success-alert").alert('close');
    });
  </script>

</body>

</html>