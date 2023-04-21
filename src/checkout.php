<?php
// checking out
include_once("config.php");
if (isset($_COOKIE['userid']) && isset($_COOKIE['loggedin'])) {
    $id = $_POST['id'];
    $userid = $_COOKIE['userid'];
    $quantity = $_POST['quantity'];
    $stmt = "SELECT * from `products` where `product_id` = '$id'";
    $products = $conn->query($stmt);
    if ($products->num_rows > 0) {
        while ($product = $products->fetch_assoc()) {
            $price = $product['price'];
            $pquantity = $product['quantity'];
        }
    }
    $total = $price * $quantity;
    $date = date('Y-m-d');
    $left = $pquantity - $quantity;
    if ($quantity <= $pquantity && $quantity > 0) {
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
