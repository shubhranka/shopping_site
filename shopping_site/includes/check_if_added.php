<?php
    require "common.php";
    function check_if_added_to_cart($con,$item_id){
        $user_id = $_SESSION['id'];
        $select_query = "SELECT * FROM user_items WHERE user_id='$user_id' and item_id='$item_id' and status='Added to cart';";
        $select_query_results = mysqli_query($con,$select_query);
        if(mysqli_num_rows($select_query_results) > 0)
            return 1;
        return 0;
    }
?>