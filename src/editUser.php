<?php
session_start();
// admin edits user
include_once("config.php");
if (isset($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $address = $_POST['address'];
    $id = $_POST['id'];
}
$statement = "UPDATE `Users` set `username` = '$name', `email` = '$email', `password` = '$password', `status` = '$status', `address` = '$address' where `user_id` = '$id'";
if ($conn->query($statement) === true) {
    echo $status;
} else {
    echo false;
}
