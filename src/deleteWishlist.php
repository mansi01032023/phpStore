<?php
// delete wishlist
include_once("config.php");
$id = $_POST['id'];
$userid = $_COOKIE['userid'];
$statement = "DELETE from `wish` where `product_id` = '$id' AND `user_id` = '$userid'";
$conn->query($statement);