<?php
    require "../includes/common.php";
    $new_pass = $_POST['new_pass'];
    $con_pass = $_POST['con_pass'];
    if($new_pass != $con_pass){
        header("location:../views/settings.php");
        $_SESSION['error'] = "password not matched";
        exit;
    }
    else{
        $pdmd5 = md5($new_pass);
        $update_query = "UPDATE TABLE users set(password)VALUE('$pdmd5');";
        $udate_query_submit = mysqli_query($con,$update_query);
        header("location:../index.php");
    }
?>