<?php
    require "../includes/common.php";
    include "../includes/check_if_added.php";
    $select_items_query = "SELECT * FROM items";
    $select_items_query_results = mysqli_query($con,$select_items_query);
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
    <div class="container">
    <?php if(isset($_SESSION['success'])){ ?>
        <div class="alert alert-success mt-4" role="alert">
           <?php echo $_SESSION['success']; ?>
            </div>
    <?php unset($_SESSION['success']);} ?>
    
    <?php if(isset($_SESSION['error'])){ ?>
        <div class="alert alert-danger mt-4" role="alert">
           <?php echo $_SESSION['error']; ?>
            </div>
    <?php unset($_SESSION['error']);} ?>
        <div class="jumbotron mt-4">
            <h1>Welcome to our LifeStyle Store
            </h1>
            <p class="lead mb-0">We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>   
        <div class="row">
            <?php while($row = mysqli_fetch_array($select_items_query_results)) { ?>
                <div class="col-12 col-md-10 mx-auto col-lg-4 mb-3">
                    <div class="card">
                    <img src="<?php echo $row['image_addr']; ?>" alt="" class="card-img-top" style="height:230px;">
                    <div class="card-body">
                        <h4 class="text-center"><?php echo $row['name']; ?></h4>
                        <p class="card-text text-center">Rs - <?php echo $row['price']; ?> /-</p>
                        <?php if (!isset($_SESSION['email'])){ ?>
                            <a href='login.php' class='btn btn-dark btn-block'>Buy Now</a>
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart($con,$row['pid'])){?>
                                <a href="carts.html" class="btn btn-dark btn-block disabled">Added to Cart</a>
                            <?php } else{?>
                                
                                         <a href="../scripts/cart-add.php?id=<?php echo $row['pid']; ?>" class="btn btn-dark btn-block">Add to Cart</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    </div>
                </div>
            <?php } ?>
            
        </div>   
</div>
<?php include "../includes/footer.php" ?>
    </body>
</html>