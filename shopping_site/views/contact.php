<?php
    require "../includes/common.php";
?>
<html>
    <head>
        <title>BootStrap Assignment</title>
        <script src="https://kit.fontawesome.com/47eda1a731.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include "../includes/header.php" ?>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 mt-5">
                    <h5 style="font-size:1.7rem" class="display-5">Live Support</h5>
                    <p><div class="500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ipsa recusandae harum cupiditate ab possimus officia aliquid! Nobis qui tenetur tempore maiores iste excepturi doloribus omnis a, debitis voluptate blanditiis!</div></p>
                </div>
                <div class="col-12 col-lg-2 mt-4 text-center">
                    <img src="../imgs/contact-me.png" alt="" class="img-fluid mx-auto">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <p style="font-size:1.7rem;">CONTACT US</p>
                    <form action="../scripts/contact-script.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea name="addr" cols="30" rows="5" placeholder="Address" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-dark">
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-4 mt-2">
                    <p style="font-size:1.5rem;">COMPANY INFORMATION</p>
                    <p class="font-weight-bold">Gurgaon,India - 122018</p>
                    <div class="row">
                        <div class="col-3 ">
                            <p class="font-weight-bold" style="font-size:0.9rem;">Phone :</p>
                        </div>
                        <div class="col-8 p-0">
                            <p class="font-weight-bold" style="font-size:0.9rem;">+91 900009000</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <p class="font-weight-bold" style="font-size:0.9rem;">Email  :</p>
                        </div>
                        <div class="col-8 p-0">
                            <p class="font-weight-bold" style="font-size:0.9rem;">xyz@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../includes/footer.php" ?>

    </body>
</html>