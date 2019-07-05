<?php
    require "../includes/common.php";
    if(!isset($_SESSION['email'])){
        header("location: index.php");
    }
    $ids_curr = explode(",",$_GET['ids']);
    $user_id = $_SESSION['id'];
    $user_email = $_SESSION['email'];
    $sum = 0;
    foreach($ids_curr as $id){
        $select_item_query = "SELECT * FROM user_items as p INNER JOIN items as t ON p.item_id=t.pid WHERE pid='$id'";
        $select_query_results = mysqli_query($con,$select_item_query);
        $row = mysqli_fetch_array($select_query_results);
        $sum += ($row['price'] * $row['quantity']);
    }
    if (isset($_SESSION['voucher_name'])){
        $voucher = $_SESSION['voucher_name'];
        $select_query = "SELECT * FROM vouchers where name='$voucher';";
        $select_query_results = mysqli_query($con,$select_query);
        $row = mysqli_fetch_array($select_query_results);
        if($sum >= $row['min_price'])
            $sum = $sum - $sum*$row['discount'];
        else{
            $_SESSION['error'] = "Something Wrong Happened";
            header("location:carts.php");
            exit;
        }
    }
    
    foreach($ids_curr as $id){
        $select_item_query = "SELECT * FROM user_items INNER JOIN items as t ON t.pid='$id'";
        $select_query_results = mysqli_query($con,$select_item_query);
        $row = mysqli_fetch_array($select_query_results);
        $item_name = $row['name'];
        $item_price = $row['price'];
        $quantity = $row['quantity'];
        $update_query = "UPDATE TABLE user_items set (status) value('Confirmed') where user_id='$user_id' and item_id='$id';";
        $update_query_submit = mysqli_query($con,$update_query);
        $delete_query = "DELETE FROM user_items where item_id='$id' and user_id='$user_id';";
        $delete_query_submit = mysqli_query($con,$delete_query);
        $order_history_query = "INSERT INTO order_history (item_id,user_email,user_id,item,price,quantity) VALUES('$id','$user_email','$user_id','$item_name','$item_price','$quantity')";
        $order_history_submit = mysqli_query($con,$order_history_query);
    }
        
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
            <div class="jumbotron mt-5">
                <h1 class="display-4 text-center">Your Order is Confirmed</h1>
                <p class="lead text-center">Thankyou For Shopping with us.</p>
                <p class="lead text-center"><a href="products.php" class="btn btn-outline-dark btn-sm">Click Here</a> To purchase any Item
                <a href="order-history.php" class="btn btn-outline-dark btn-sm">Click Here</a> To check order history</p>
            </div>
        </div>
        <?php include "../includes/footer.php" ?>
    </body>
</html>