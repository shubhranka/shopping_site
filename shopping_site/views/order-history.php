<?php
    require "../includes/common.php";
    if(!isset($_SESSION['email']))
        header('location: login.php');
    $num = 0;
    $user_id = $_SESSION['id'];
    $select_query = "SELECT * FROM order_history WHERE user_id='$user_id'";
    $select_query_results = mysqli_query($con,$select_query);
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
    
    <?php if(mysqli_num_rows($select_query_results) > 0) { ?>}
    <h1 class="my-4 text-center"> Order History</h1>
        <table class="table col-9 mx-auto table-striped">
            <tr>
                <th>No.</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Date of Purchase</th>
            </tr>
            <?php while($row = mysqli_fetch_array($select_query_results)){ 
                    $num+=1?>
                <tr>
                    <td><?php echo $num ?></td>
                    <td><?php echo $row['item'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['quantity'] ?></td>
                    <td><?php echo $row['date_of_purchase'] ?></td>
                </tr>
            <?php }}else{ ?>
            <center>
            <div class="container">
                <div class="jumbotron mt-4">
                    <h3 class="display-4">You have no orders. Yet! </h3>
                    <p class="lead">Order Some Cool Stuffs . <a href="products.php" class="btn btn-outline-dark btn-sm"> Order Here </a></p>
                </div>
            </div>
            </center>
            <?php } ?> 
        </table>
        <?php include "../includes/footer.php" ?>
    </body>
</html>