<?php
include_once("./config.php");
// setting the variables with their respective fields
if (isset($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
}
// defining the sql statement to insert values into the db
$statement = "INSERT INTO `Users`(`user_id`, `username`, `email`, `password`, `address`, `status`) VALUES (NULL, '$name', '$email', '$password', '$address', 'pending')";
// print_r($email);die;
if ($conn->query($statement) === true) {
    $stmt = "SELECT `user_id` FROM `Users` where `email` = '$email' AND `password` = '$password'";
    $result = $conn->query($stmt);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $text = $row['user_id'];
        }
    }
    if (!(isset($_COOKIE['email']) && isset($_COOKIE['password']) && isset($_COOKIE['userid']))) {
        setcookie("email", $email, time() + (86400 * 30), "/");
        setcookie("password", $password, time() + (86400 * 30), "/");
        setcookie("userid", $text, time() + (86400 * 30), "/");
    }
    echo true;
} else {
    echo false;
}
