<?php
// product is being added to wishlist here
include_once("config.php");
$product_id = $_POST['id'];
$statement = "SELECT * from `products` where `product_id` = '$product_id'";
$result = $conn->query($statement);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $price = $row['price'];
        $name = $row['name'];
        $image = $row['image'];
    }
}
if (isset($_COOKIE['userid'])  && isset($_COOKIE['loggedin'])) {
    $userid = $_COOKIE['userid'];
    $check = "SELECT * from `wish` where `user_id` = '$userid' AND `product_id` = '$product_id'";
    $checkResult = $conn->query($check);
    if ($checkResult->num_rows == 0) {
        $stmt = "INSERT INTO `wish` VALUES (null, '$userid', '$product_id', '$name', '$image', '$price')";
        $conn->query($stmt);
    }
    echo true;
} else {
    echo false;
}
