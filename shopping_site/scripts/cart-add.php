<?php
    require "../includes/common.php";
    $id = $_REQUEST['id'];
    $user_id = $_SESSION['id'];
    $insert_query = "INSERT INTO user_items (user_id,item_id,status) VALUES('$user_id','$id','Added to cart');";
    $insert_query_submit = mysqli_query($con,$insert_query);
    if($insert_query_submit){
    header("location:../views/products.php");
    $_SESSION['success'] = "Item Added";
    }else{
        header("location:../views/products.php");
        $_SESSION['error'] = "Item Not Added";
    }
?>