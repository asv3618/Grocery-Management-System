<?php
function getProduct($conn, $productId){
    $qry = "select product_id,category_name,product_name,description,price,product_pic,reward_points,stock_quantity from product where product_id='$productId'";
	$rs = mysqli_query($conn, $qry);
    if($row = mysqli_fetch_assoc($rs) ){
        return $row['product_name'].",".$row['description'].",".$row['price'].",".$row['product_pic'];
    }
    return "";
}

function getProductRating($conn, $productId){
    $qry = "select avg(rating) as avg_rating from reviews where product_id='$productId'";
	$rs = mysqli_query($conn, $qry);
    if($row = mysqli_fetch_assoc($rs) ){
        return number_format((float)$row['avg_rating'], 2, '.', '');
    }
    return "0";
}

function displayStarRating($rating) {
    $fullStars = floor($rating);
    $halfStar = ceil($rating - $fullStars);
    $emptyStars = 5 - $fullStars - $halfStar;

    echo str_repeat('&#9733;', $fullStars); 
    if ($halfStar > 0) {
        echo '&#9733;'; 
    }
    echo str_repeat('&#9734;', $emptyStars);
}
?>