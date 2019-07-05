<?php
    require "../includes/common.php";
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $password = stripslashes($_POST['password']);
    $passmd5 = md5($password);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $number = mysqli_real_escape_string($con,$_POST['number']);
    $city = mysqli_real_escape_string($con,$_POST['city']);
    $addr = mysqli_real_escape_string($con,$_POST['addr']);
    $name_reg = "^\s*([A-Za-z]{1,}([\.,] |[-']| ))+[A-Za-z]+\.?\s*$";
    $email_reg = "[^@]+@[^@]+\.[a-zA-Z]{2,6}";
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("location:../views/signup.php?email_error=enter correct email");
        exit;
    }
    $select_query = "SELECT * FROM users WHERE email = '$email'";
    $select_query_results = mysqli_query($con,$select_query);
    if(mysqli_num_rows($select_query_results)>0){
        header("location:../views/signup.php?error=Email Exist");
        exit;
    }
    else{
        $insert_query = "INSERT INTO users (email,name,contact,address,password) VALUES('$email','$name',$number,'$addr','$passmd5');";
        $query_submit = mysqli_query($con,$insert_query);
        if($query_submit){
        $_SESSION['id'] = mysqli_insert_id($con);
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "Welcome to the world of Fashion ".filter_var($name,FILTER_SANITIZE_STRING);
        header("location:../views/products.php");
        }else{
            header("location:../views/signup.php");
        }
    }
?>