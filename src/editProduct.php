<?php
session_start();
// admin edits product
include_once("config.php");
if (isset($_POST)) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $id = $_POST['id'];
}
$statement = "UPDATE `products` set `name` = '$name', `category` = '$category', `quantity` = '$quantity', `price` = '$price', `description` = '$desc' where `product_id` = '$id'";
if ($conn->query($statement) === true) {
    echo true;
} else {
    echo false;
}
