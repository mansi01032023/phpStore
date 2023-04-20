<?php
// displaying products
include_once("config.php");
?>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?php
$statement = "SELECT * from `products`;";
$result = $conn->query($statement);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='col-lg-3 col-md-6 col-sm-6 d-flex'>
           <div class='card w-100 my-2 shadow-2-strong'>
           <img src='" . $row['image'] . "' class='card-img-top' style='aspect-ratio: 1 / 1' />
           <div class='card-body d-flex flex-column'>
           <h5 class='card-title'>" . $row['name'] . "</h5>
           <p class='card-text'>$" . $row['price'] . ".00</p>
           <div class='card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto'>
           <a href='#!' class='btn btn-info shadow-0 m-1' id='cart" . $row['product_id'] . "' onclick='addToCart(this.id)'>Add to cart</a>
           <a href='#!' class='btn btn-info border icon-hover m-1' id='buy" . $row['product_id'] . "' onclick='buy(this.id)'>Buy</a>
           <a href='#!' class='btn btn-light py-2 icon-hover' id='wish" . $row['product_id'] . "' onclick='addToWishlist(this.id)'><i class='fas fa-heart fa-lg text-danger px-1'></i></a>
           </div>
           </div>
           </div>
           </div>";
    }
}
?>