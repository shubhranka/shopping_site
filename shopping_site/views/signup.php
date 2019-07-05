<?php
    require "../includes/common.php";
    if(isset($_SESSION['email']))
         header('location:views/products.php');
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
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center">
        <div class="signup mt-4 mx-auto card">
        
            <div class="card-header">
            
            <h2 class="">Sign Up</h2>
            </div>
            <div class="card-body">
                <form action="../scripts/signup_script.php" method="POST">  
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" id="" placeholder="Name" required> 
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" id="" placeholder="Email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" require="true">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" id="" required placeholder="Password" minlength="6">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="number" id="" placeholder="Contact" required pattern="^[0-9]{10}$" title="Please Input Valid Number">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="city" id="" placeholder="City" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Adddress" name="addr" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="form-control btn btn-dark btn-lg">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <p>Already have an account. <a href="login.php" class="font-weight-bold text-dark"> Login Here</a></p>
            </div>
           
        </div>
    </div>
    </center>
        <?php include "../includes/footer.php" ?>
    </body>
</html>