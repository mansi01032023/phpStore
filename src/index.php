<!--Main Navigation-->

<head>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<header class="p-0 m-0">
    <!-- Jumbotron -->
    <?php
    include_once("navbar.php");
    ?>
    <!-- Jumbotron -->

    <!-- Jumbotron -->
    <div class="container bg-white text-white p-4">
        <div class="container p-0 m-0">
            <img src="https://m.media-amazon.com/images/I/61um60VOoeL._SX3000_.jpg" style="height: 400; width: 1000;">
        </div>
    </div>
    <!-- Jumbotron -->
</header>
<!-- Products -->
<section>
    <div class="container my-5">
        <header class="mb-4">
            <h3>All products</h3>
        </header>

        <div class="row" id="products">
        </div>
    </div>
</section>
<!-- Products -->

<!-- Feature -->
<section class="mt-5" style="background-color: #f5f5f5;">
    <div class="container text-dark pt-3">
        <header class="pt-4 pb-3">
            <h3>Why choose us</h3>
        </header>

        <div class="row mb-4">
            <div class="col-lg-4 col-md-6">
                <figure class="d-flex align-items-center mb-4">
                    <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                        <i class="fas fa-camera-retro fa-2x fa-fw text-primary floating"></i>
                    </span>
                    <figcaption class="info">
                        <h6 class="title">Reasonable prices</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                    </figcaption>
                </figure>
            </div>
            <!-- col // -->
            <div class="col-lg-4 col-md-6">
                <figure class="d-flex align-items-center mb-4">
                    <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                        <i class="fas fa-star fa-2x fa-fw text-primary floating"></i>
                    </span>
                    <figcaption class="info">
                        <h6 class="title">Best quality</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                    </figcaption>
                </figure>
                <!-- itemside // -->
            </div>
            <!-- col // -->
            <div class="col-lg-4 col-md-6">
                <figure class="d-flex align-items-center mb-4">
                    <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                        <i class="fas fa-plane fa-2x fa-fw text-primary floating"></i>
                    </span>
                    <figcaption class="info">
                        <h6 class="title">Worldwide shipping</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                    </figcaption>
                </figure>
                <!-- itemside // -->
            </div>
            <!-- col // -->
            <div class="col-lg-4 col-md-6">
                <figure class="d-flex align-items-center mb-4">
                    <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                        <i class="fas fa-users fa-2x fa-fw text-primary floating"></i>
                    </span>
                    <figcaption class="info">
                        <h6 class="title">Customer satisfaction</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                    </figcaption>
                </figure>
                <!-- itemside // -->
            </div>
            <!-- col // -->
            <div class="col-lg-4 col-md-6">
                <figure class="d-flex align-items-center mb-4">
                    <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                        <i class="fas fa-thumbs-up fa-2x fa-fw text-primary floating"></i>
                    </span>
                    <figcaption class="info">
                        <h6 class="title">Happy customers</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                    </figcaption>
                </figure>
                <!-- itemside // -->
            </div>
            <!-- col // -->
            <div class="col-lg-4 col-md-6">
                <figure class="d-flex align-items-center mb-4">
                    <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                        <i class="fas fa-box fa-2x fa-fw text-primary floating"></i>
                    </span>
                    <figcaption class="info">
                        <h6 class="title">Thousand items</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                    </figcaption>
                </figure>
                <!-- itemside // -->
            </div>
            <!-- col // -->
        </div>
    </div>
    <!-- container end.// -->
</section>
<!-- Feature -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="newScript.js"></script>