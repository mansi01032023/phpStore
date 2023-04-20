<?php
// admin edits order
session_start();
include_once("config.php");
if (isset($_POST)) {
    $status = $_POST['status'];
    $total = $_POST['total'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    $id = $_POST['id'];
}
$statement = "UPDATE `orders` set `status` = '$status', `total` = '$total', `date` = '$date', `address` = '$address' where `order_id` = '$id'";
if ($conn->query($statement) === true) {
    echo true;
} else {
    echo false;
}
