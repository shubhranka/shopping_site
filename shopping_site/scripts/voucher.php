<?php
    require "../includes/common.php";   
    if(!$_SESSION['email']){
        header("location:../views/login.php");
        exit;
    }
    $voucher = $_GET['voucher'];
    $sum = $_GET['totalAmt'];
    $select_query = "SELECT * FROM vouchers where name='$voucher';";
    $select_query_results = mysqli_query($con,$select_query);
    if(mysqli_num_rows($select_query_results) != 0 ){
        $row = mysqli_fetch_array($select_query_results);
        $minPrice = $row['min_price'];
        if ($sum >= $minPrice){
            $_SESSION['success'] = "Voucher Applied";
            $_SESSION['voucher_name'] = $voucher;
        }else{
            $_SESSION['warning'] = "Make Your bill Greater Than Rs $minPrice /-";
        }
        header("location:../views/carts.php");
    }else{
        $_SESSION['error'] = "Invalid Voucher";
        header("location:../views/carts.php");
    }

?>