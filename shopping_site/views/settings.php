<?php
    require "../includes/common.php";
    if(!isset($_SESSION['email'])){
        header('location: products.php');
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
<script>
var check = function() {
  if (document.getElementById('new_pass').value ==
    document.getElementById('con_pass').value) {
    document.getElementById('new_pass').style.color = 'green';
    document.getElementById('con_pass').style.color = 'green';
  } else {
    document.getElementById('new_pass').style.color = 'red';
    document.getElementById('con_pass').style.color = 'red';
  }
}
</script>    
</head>
    <body>
    <?php include "../includes/header.php" ?>
    <?php if(isset($_SESSION['error'])){ ?>
        <div class="alert alert-danger mt-4" role="alert">
           <?php echo $_SESSION['error']; ?>
            </div>
    <?php unset($_SESSION['error']);} ?>
        <form action="../scripts/setting_script.php" method="POST" class="col-5 mx-auto">
            <h4 class="my-3">Change Password</h4>
            <div class="form-group">
                <input class="form-control" type="password" name="old_pass" id="" placeholder="Old Password">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="new_pass" id="new_pass" placeholder="New Password" minlength=6 onkeyup='check();'>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="con_pass" id="con_pass" placeholder="Confirm Password" minlength=6 onkeyup='check();'>
            </div>
            <div class="form-group">
                <input type="submit" name="" id="" value="Change Password" class="btn btn-dark form-control">
            </div>
        </form>
        <?php include "../includes/footer.php" ?>
    </body>
</html>