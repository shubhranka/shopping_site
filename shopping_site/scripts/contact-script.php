<?php
    require "../includes/common.php";
    $name = mysqli_real_escape_string($con,$_POST['name']);    
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $addr = mysqli_real_escape_string($con,$_POST['addr']);
    $query = "INSERT INTO contact_info (name,email,address) VALUES('$name','$email','$addr');";
    $quer_sbumt = mysqli_query($con,$query);
    if($quer_sbumt){
        header("location:../views/contact.php?success=1");
    }else{
        header("location:../views/contact.php?error=1");
    }
?>