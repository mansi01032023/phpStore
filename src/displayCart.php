<?php
// displaying cart
session_start();
include_once("config.php");
?>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?php
include_once("navbar.php");
?>
<h1 class="text-center p-0 m-0">My Cart</h1><br><br>
<?php

if (isset($_COOKIE['userid'])) {
    $userid = $_COOKIE['userid'];
    $stmt = "SELECT * FROM `cart` where `user_id` = '$userid'";
    $result = $conn->query($stmt);
    if ($result->num_rows > 0) {
        echo "<div class='row m-4'>";
        while ($row = $result->fetch_assoc()) {
            echo "<div class='col-lg-3 col-md-6 col-sm-6 d-flex'>
        <div class='card w-100 my-2 shadow-2-strong' >
        <img src='" . $row['image'] . "' class='card-img-top' style='aspect-ratio: 1 / 1' />
        <div class='card-body d-flex flex-column'>
        <h5 class='card-title'>" . $row['name'] . "</h5>
        <div class='card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto'>
        <a href='#!' class='btn btn-light py-2 icon-hover' id='wish" . $row['product_id'] . "' onclick='addToWishlist(this.id)'><i class='fas fa-heart fa-lg text-danger px-1'></i></a>
        <a href='#!' class='btn btn-info border  icon-hover' id='buy" . $row['product_id'] . "' onclick='buy(this.id)'>Buy Now</a>
        <a href='#' class='text-danger m-2' data-mdb-toggle='tooltip' id='delete" . $row['product_id'] . "' onclick='deleteCart(this.id)'><i
            class='fas fa-trash-alt'></i></a>
        </div>
        </div>
        </div>
        </div>";
        }
        echo "</div>";
    }
}

?>
<script src="newScript.js"></script>