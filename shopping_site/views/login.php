<?php
    require "../includes/common.php";
    if(isset($_SESSION['email']))
        header('location: products.php');
?>
<html>
    <head>
        <title>BootStrap Assignment</title>
        <script src="https://kit.fontawesome.com/47eda1a731.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php include "../includes/header.php" ?>
        <center>
        <?php if(isset($_SESSION['error'])){ ?>
        <div class="container mt-3">
            <div class="alert alert-danger">
                <?php echo $_SESSION['error']; ?>
            </div>
        </div>
        <?php unset($_SESSION['error']);} ?>
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            <div class="card mt-3">
                <div class="card-body">
                    
                    <h5 class="card-title">Login to Purchase Awesome Items</h5>
                    <form action="../scripts/login_submit.php" method="POST">
                        <div class="form-group">
                            <input class="form-control" type="email" name="username" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input class=" form-control btn btn-lg btn-dark" type="submit"value="Submit">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <p class="mb-0">Dont have an Account. No Problem! Register <a href="signup.php" class="text-dark font-weight-bolder">Here</a> </p>
                </div>
            </div>
        </div>
        </center>
        <?php include "../includes/footer.php" ?>
    </body>
</html>