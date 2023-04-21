<?php
session_start();
include_once("config.php");
if (isset($_COOKIE['loggedin'])) {
    $pid = $_POST['id'];
    $statement = "SELECT * from `products` where `product_id` = '$pid'";
    $result = $conn->query($statement);
    if ($result->num_rows > 0) {
        $_SESSION['singleProduct'] = array();
        while ($row = $result->fetch_assoc()) {
            $_SESSION['singleProduct']['name'] = $row['name'];
            $_SESSION['singleProduct']['price'] = $row['price'];
            $_SESSION['singleProduct']['image'] = $row['image'];
            $_SESSION['singleProduct']['desc'] = $row['description'];
            $_SESSION['singleProduct']['id'] = $pid;
            $_SESSION['singleProduct']['quantity'] = $row['quantity'];
        }
    }
    echo true;
} else {
    echo false;
}
