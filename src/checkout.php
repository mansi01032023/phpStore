<?php
// checking out
include_once("config.php");
if (isset($_COOKIE['userid'])) {
    $id = $_POST['id'];
    $userid = $_COOKIE['userid'];
    $quantity = $_POST['quantity'];
    $price = $_SESSION['singleProduct']['price'];
    $total = $price * $quantity;
    $date = date('Y-m-d');
    $left = $_SESSION['singleProduct']['quantity'] - $quantity;
    if ($quantity <= $_SESSION['singleProduct']['quantity'] && $quantity > 0) {
        $statement = "INSERT into `orders` VALUES (null, '$userid', '$id', 'placed', '$total', 'address', '$date')";
        if ($conn->query($statement)) {
            $stmt = "UPDATE `products` set `quantity` = '$left' where `product_id` = '$id'";
            $conn->query($stmt);
            $result = "Your order has been placed successfully for $" . $total . ".00";
            echo $result;
        }
    } else {
        $result = "OUT OF STOCK";
        echo $result;
    }
} else {
    echo false;
}
