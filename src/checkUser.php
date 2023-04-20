<?php
// this page is checking whether or not the user is registered with us
include_once("config.php");
if (isset($_POST)) {
    $email = $_POST['emailLogin'];
    $password = $_POST['passwordLogin'];
}
// defining the sql query for searching for respective matches with email and password
$statement = "SELECT * from `Users` where `email`='$email' AND `password`='$password' AND `status` = 'approved'";
$result = $conn->query($statement);
if ($result->num_rows > 0) {
    $stmt = "SELECT `user_id` FROM `Users` where `email` = '$email' AND `password` = '$password'";
    $res = $conn->query($stmt);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
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
?>
