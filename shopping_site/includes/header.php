<nav class="navbar navbar-expand-lg bg-dark navbar-dark p-1">
            <div class="container">
                    <a href="/shopping_site/index.php" class="navbar-brand m-0">LifeStyle Store</a>
                    <button class="navbar-toggler m-0" data-target="#mynavbar" data-toggle="collapse">
                        <span class="navbar-toggler-icon m-0"></span>
                    </button>
                    

                <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
                    <div class="navbar-nav m-0">
                        <?php if(isset($_SESSION['email'])){?>
                            <a class="nav-item nav-link" href="/shopping_site/views/carts.php"><i class="fas fa-shopping-cart"></i> Cart</a>
                            <a class="nav-item nav-link" href="/shopping_site/views/settings.php"><i class="fas fa-sun"></i> Setting</a>
                            <a class="nav-item nav-link" href="/shopping_site/views/order-history.php"><i class="fas fa-history"></i> Order History</a>
                            <a class="nav-item nav-link" href="/shopping_site/scripts/logut.php"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                        <?php } else { ?>
                            <a class="nav-item nav-link" href="/shopping_site/views/signup.php"><i class="fa fa-sign-in"></i> Sign Up</a>
                            <a class="nav-item nav-link" href="/shopping_site/views/login.php"><i class="fas fa-clipboard-check"></i> Login</a>   
                            <a class="nav-item nav-link" href="/shopping_site/views/about.php"><i class="far fa-id-badge"></i> About Us</a>   
                            <a class="nav-item nav-link" href="/shopping_site/views/contact.php"><i class="far fa-address-card"></i>  Contact Us</a>   

                            <?php } ?>
                    </div>
                </div>
            </div>
        </nav>