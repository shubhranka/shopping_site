<?php
    require "includes/common.php";
    if(isset($_SESSION['email']))
        header('location: views/products.php');
?>
<html>
    <head>
        <title>BootStrap Assignment</title>
        <script src="https://kit.fontawesome.com/47eda1a731.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include "includes/header.php" ?>
        <div id="banner_img" class="mb-4">
            <div class="banner-content">
                <h2 class="text-white">We Sell LifeStyle</h2>
                <p class="lead text-white mb-4">Flat 40% off On TRENDS</p>
                <a href="views/products.php" class="btn btn-outline-light btn-lg">Shop Now</a>
            </div>
        </div>
        <div class="container" style="margin-bottom:60px;">
            <div class="row">
                <div class="col-12 col-md-10 mx-auto col-lg-4">
                <a href="views/products.php" class="text-dark">
                    <div class="card text-center">
                        <img src="imgs/camera.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title"><h4>Cool Cameras</h4></div>
                            <p class="card-text">Buy Cool Cameras </p>
                </a>
                        </div>
                    </div>
                </div>
            
                <div class="col-12 col-md-10 mx-auto col-lg-4">
                <a href="views/products.php" class="text-dark">
                    <div class="card text-center">
                        <img src="imgs/watch.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title"><h4>Awesome Watches</h4></div>
                            <p class="card-text">Buy Stunning Watches </p>
                </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-10 mx-auto col-lg-4">
                <a href="views/products.php" class="text-dark">
                    <div class="card text-center">
                        <img src="imgs/shirt.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title"><h4>Faboulous Shirts</h4></div>
                            <p class="card-text">Fashion Inside </p>
                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php" ?>

    </body>
</html>