<?php
// product is being added here
include_once("config.php");
$pname = $_POST['pname'];
$pcategory = $_POST['pcategory'];
$pquantity = $_POST['pquantity'];
$pdesc = $_POST['pdesc'];
$pprice = $_POST['pprice'];
$pimage = $_POST['pimage'];

$statement = "INSERT INTO `products`(`product_id`, `category`, `quantity`, `price`, `image`, `description`, `name`) VALUES (null, '$pcategory', '$pquantity', '$pprice', '$pimage', '$pdesc', '$pname')";

if ($conn->query($statement)) {
    echo true;
} else {
    echo false;
}
