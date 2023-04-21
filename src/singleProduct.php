<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Item - Start Bootstrap Template</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php
    include_once("navbar.php");
    ?>
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?php echo $_SESSION['singleProduct']['image']; ?>" alt="..." /></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder"><?php echo $_SESSION['singleProduct']['name']; ?></h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through">$<?php echo $_SESSION['singleProduct']['price']; ?>.00</span>
                    </div>
                    <p class="lead"><?php echo $_SESSION['singleProduct']['desc']; ?></p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" required/>
                        <button class="btn btn-outline-dark flex-shrink-0" type="button" id="<?php echo "cart" . $_SESSION['singleProduct']['id']; ?>" onclick="addToCart(this.id)">

                            Add to cart
                        </button>
                        <button class="btn btn-outline-dark flex-shrink-0" type="button" id="<?php echo "wish" . $_SESSION['singleProduct']['id']; ?>" onclick="addToWishlist(this.id)">
                            <i class='fas fa-heart fa-lg text-danger px-1'></i>
                        </button>
                        <button class="btn btn-outline-dark flex-shrink-0" type="button" id="<?php echo "check" . $_SESSION['singleProduct']['id']; ?>" onclick="checkout(this.id)">
                            <i class="bi-cart-fill me-1"></i>
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="newScript.js"></script>
</body>

</html>