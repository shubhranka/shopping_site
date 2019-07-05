<?php
    require "../includes/common.php";
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $delte_query = "DELETE FROM user_items where user_id='$user_id' and item_id='$item_id';";
    $delte_query_submit = mysqli_query($con,$delte_query);
    $_SESSION['success'] = "Item Removed";
    header("location:../views/carts.php");   
?>