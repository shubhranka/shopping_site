<?php
    require "../includes/common.php";
    $id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $quantity = $_GET['quantity'];
    $update_query = "UPDATE user_items SET quantity='$quantity' WHERE user_id='$user_id' and item_id='$id';";
    $update_query_submit = mysqli_query($con,$update_query);
    if($update_query_submit){
    header("location:../views/carts.php");
    }else{
        header("location:../views/carts.php");
    }
?>