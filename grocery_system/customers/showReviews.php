<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'groceryfiles/groceryfiles.php';
    include '../grocery_connections.php';
    include './groceryfiles/headerFile.php';
    ?><br>
</head>

<body style='margin-left: 20px'>
<br>
    <div class='row'>
        <?php
        include 'Customers_Home_Menu.php';
        $qry = "select product_id,category_name,product_name,description,price,product_pic,reward_points,stock_quantity from product where product_id=" . $_REQUEST['product_id'];
        $rs = mysqli_query($conn, $qry);
        $i = 1;
        while ($row = mysqli_fetch_assoc($rs)) {
        ?>
            <div class='col-sm-3'>
                <br>
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
                        
                        if ($row['stock_quantity'] > 0) {
                            echo "<b><p class='text-success'>Stock Available</p></b>";
                            echo "<A href='add_to_cart.php?product_id=" . $row['product_id'] . "' class='btn btn-sm btn-outline-primary'>Add to Cart</A>";
                        } else {
                            echo "<b><p class='text-danger'>No Stock</p></b>";
                            echo "<br>";
                        }
                        ?>

                        &nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<A href='NewWishtList_code.php?product_id=<?php echo $row['product_id']; ?>' <i class="fa fa-heart" style="margin-top:15px;font-size:20px;color:red"></i></a>

                    </div>
                </div>
            </div>

        <?php
        }
        ?>
        <div class='col-sm-8'>
            <br>
            <div class="container card" style="background-color:#E7EBEA">
                <h4><b>
                        <p style="color: green;"> Reviews</p>
                    </b></h4>
                <form name='f1' method='post' action="#" enctype="">
                    <?php
                    $qry = "select review_id,review_date,customer_id,rating,review_comments from reviews where product_id='" . $_REQUEST['product_id'] . "'";
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
                    } ?>
            </div>
        </div>
        <br>
    </div>

   

</body>

</html>