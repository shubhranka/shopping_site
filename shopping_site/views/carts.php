<?php
    require "../includes/common.php";
    if(!$_SESSION['email']){
        header("location:../views/login.php");
        exit;
    }
    $user_id = $_SESSION['id'];
    $sum = 0;
    $ids = "";
    $item_names = "";
    $index=1;
    $temp = "";
    $row_voucher = array();
    $vou = FALSE;
    $select_query = "SELECT * FROM user_items as ut INNER JOIN items as t ON ut.item_id=t.pid where user_id='$user_id';";
    $select_query_results = mysqli_query($con,$select_query);
    if(isset($_SESSION['voucher_name'])) { 
        $name = $_SESSION['voucher_name'];
        $vou = TRUE;
        $voucher_query = "SELECT * FROM vouchers where name='$name';"; 
        $voucher_query_result = mysqli_query($con,$voucher_query);
        $row_voucher = mysqli_fetch_array($voucher_query_result);
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
    
    <?php if(isset($_SESSION['success'])){ ?>
        <div class="alert alert-success mt-4 col-5 mx-auto" role="alert">
           <?php echo $_SESSION['success']; ?>
            </div>
    <?php unset($_SESSION['success']);} ?>
    <?php if(isset($_SESSION['error'])){ ?>
        <div class="alert alert-danger mt-4 col-5 mx-auto" role="alert">
           <?php echo $_SESSION['error']; ?>
            </div>
    <?php unset($_SESSION['error']);} ?>
    <?php if(isset($_SESSION['warning'])){ ?>
        <div class="alert alert-warning mt-4 col-5 mx-auto" role="alert">
           <?php echo $_SESSION['warning']; ?>
            </div>
    <?php unset($_SESSION['warning']);} ?>

    <?php if(mysqli_num_rows($select_query_results) == 0){ ?>
        <center>
        <div class="container">
            <div class="jumbotron mt-5 py-4">
                <h2 class="display-4 mb-4"> Cart is empty.</h2>
                 <p class="lead">Add Items to your cart.<a href="products.php" class="btn btn-outline-dark btn-sm"> Click Here </a><p>
            </div>
        </div>
        </center>
    <?php } else { ?>
        <h2 class="my-4 text-center">Shopping Cart</h2>
        <table class="table col-9 mx-auto table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">ItemNumber</td>
                    <th scope="col">ItemName</td>
                    <th scope="col">Price</td>
                    <th scope="col">Quantity</td>                    
                    <th scope="col">  </td>
                    <th scope="col">  </td>
                </tr>
            </thead>
    <?php while($row = mysqli_fetch_array($select_query_results)) {              
                        $sum += $row['price'] * $row['quantity'];
                        $ids= $ids.$row['item_id'].","; 
                        $temp = "";
                        $temp = "".$row['item_id'];
                        ?>
                        <tr>
                            <td><?php echo $index;?></td>
                            <td><?php echo $row['name'];?></td>
                            <td>Rs <?php echo $row['price'];?> /-</td>
                            <td>X <?php echo $row['quantity'];?> </td>
                            <td>Change Quantity <form action="../scripts/quantity.php" class="d-inline-block  my-0" method="GET"><input type="number" name="quantity" class="form-control d-inline" style="width:30%; height:8%;" placeholder="Items"><input type="hidden" name="id" value="<?php echo $temp; ?>"><input type="submit" class="btn btn-outline-dark btn-sm ml-2 align-self-center" value="Change"></td></form>
                            <td><a href="../scripts/cart-remove.php?id=<?php echo $row['item_id'] ?>" class="btn btn-danger btn-sm">Remove</a></td>
                        </tr>
                        <?php $index++; }?>

                <tr>
                <td>  </td>
                <td>Total</td>
                <?php if($vou && ($sum >= $row_voucher['min_price'])){ ?>
                    
                    <td>Rs <?php echo ($sum - $sum*$row_voucher['discount']); ?> /-</td>
                    <td> </td>
                    
                    <td><button class="btn btn-success">VOUCHER APPLIED</button></td>
                <?php } else { if($vou) 
                                unset($_SESSION['voucher_name']);?>
                    <td>Rs <?php echo $sum; ?> /-</td>
                        <td> </td>
                    <td><form action="../scripts/voucher.php" method="GET" class="d-flex my-0"><input type="hidden" name="totalAmt" value="<?php echo $sum; ?>"><input type="text" name="voucher" id="" class="form-control d-inline" placeholder="VOUCHER" style="width:58%;"><input type="submit" value="APPLY" class="form-control btn btn-outline-success btn-sm align-self-center ml-3" style="width:20%;"></form> </td>
                <?php } ?>
                <td><a href="success.php?ids=<?php echo $ids; ?>" class="btn btn-dark">Checkout</a></td>
            </tr>
        </table>
    <?php } ?>
        <?php include "../includes/footer.php" ?>
    </body>
</html>