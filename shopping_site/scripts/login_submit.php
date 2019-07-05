<?php
    require "../includes/common.php";
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = stripslashes($_POST['password']);
    $passmd5 = md5($password);
    $select_query = "SELECT * FROM users WHERE email='$username' and password='$passmd5'";
    $select_query_results = mysqli_query($con,$select_query);
    if(mysqli_num_rows($select_query_results) == 0){
        $_SESSION['error']="No User Found";
        header("location:../views/login.php");
        exit;
    }
        else{
        $row = mysqli_fetch_array($select_query_results);
        $_SESSION['email']=$row['email'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['success'] = "Welcome back ".filter_var($row['name'],FILTER_SANITIZE_STRING);
        header("location:../views/products.php");
    }
?>