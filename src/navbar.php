<head>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<div class="p-3 text-center bg-white border-bottom">
    <div class="container">
        <div class="row gy-3">
            <!-- Left elements -->
            <div class="col-lg-2 col-sm-4 col-4">
                <a href="" target="_blank" class="d-flex float-start">
                    <h3><em style="color: #ff9899;">Style Store</em></h3>
                </a>
            </div>
            <!-- left elements -->
            <div class="container-fluid__navbar order-lg-last col-lg-5 col-sm-8 col-8">
                <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav p-0">
                            <li class="nav-item">
                                <a class="me-1 py-1 px-3 nav-link d-flex align-items-center" href="index.php">
                                    <p class="d-none d-md-block mb-0" style="color: magenta;">Home</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="me-0 py-1 px-2 nav-link d-flex align-items-center" href="<?php if (isset($_COOKIE['loggedin'])) echo "displayWishlist.php";
                                                                                                    else echo "login.php"; ?>"> <i class="fas fa-heart m-1 me-md-2" style="color: magenta;"></i>
                                    <p class="d-none d-md-block mb-0" style="color: magenta;">Wishlist</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="py-1 px-2 nav-link d-flex align-items-center" href="<?php if (isset($_COOKIE['loggedin'])) echo "displayCart.php";
                                                                                                else echo "login.php"; ?>"> <i class="fas fa-shopping-cart m-1 me-md-2"></i>
                                    <p class="d-none d-md-block mb-0">Cart</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="me-0 py-1 px-2 nav-link d-flex align-items-center" href="<?php if (isset($_COOKIE['loggedin'])) echo "index.php";
                                                                                                    else echo "signup.php"; ?>"> <i class="fas fa-user-alt m-1 me-md-2" style="color: lightblue;"></i>
                                    <p class="d-none d-md-block mb-0 text-info">Signup</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="me-0 py-1 px-2 nav-link d-flex align-items-center" href="<?php if (isset($_COOKIE['loggedin'])) echo "index.php";
                                                                                                    else echo "login.php"; ?>"> <i class="fas fa-user-alt m-1 me-md-2" style="color: green;"></i>
                                    <p class="d-none d-md-block mb-0 text-success">Signin</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="me-0 py-1 px-2 nav-link d-flex align-items-center" href="logout.php"> <i class="fas fa-user-alt m-1 me-md-2" style="color: red;"></i>
                                    <p class="d-none d-md-block mb-0 text-danger">SignOut</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Center elements -->

            <!-- Right elements -->
            <div class="col-lg-5 col-md-12 col-12">
                <div class="input-group float-center">
                </div>
            </div>
            <!-- Right elements -->
        </div>
    </div>
</div>