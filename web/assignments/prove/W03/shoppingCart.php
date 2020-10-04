<?php
    session_start();
    require_once 'data.php';

    // LOAD ITEMS STORED IN SESSION

    $userProducts = $_SESSION['userCartItems'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header py-4">
    <div class="container">
            <div class="logo-box">
                <img src="img/logo.png" alt="Zayra's Fashion Logo" class="logo">
                <h1 class="h3">Zayra's Fashion</h1>
            </div>
                
                
                <nav class="user-nav">
                    <div class="user-nav-icon-box">
                        <a href="index.php" class="user-nav-link">Products</a>
                    </div>
                </nav>
        </div>
    </header>
    <main class="main py-5">
        <div class="container">
            <h2 class="mb-3">Your Items in Cart</h2>
            <div class="row">
                <div id="cart-list" class="col-12 col-md-8">
                    
<?php 
    foreach($userProducts as $userProduct) {

        foreach($products as list($id, $name, $price, $image)) {

            if($userProduct == $id) {
     ?>    
           <!-- <div class="row"> -->
                <div class="col-12">
                    <div class="product-cart mb-4">
                        <div class="product-cart-container"><img src="img/products/<?= $image; ?>" alt="Product Placeholder" class="product-cart-image"></div>
                        <div class="product-cart-description">
                            <h3 class="product-cart-name"><?=$name; ?></h3>
                            <p class="product-cart-price">Price: &dollar; <?= $price; ?></p>
                        </div>
                        <div class="product-cart-actions"><a id="<?= $id ?>" href="" class="remove-item-button btn btn-link text-danger">
                        <svg class="product-cart-icon">
                                <use xlink:href="img/sprite.svg#icon-bin"></use>
                            </svg>    
                        Remove</a></div>
                    </div>
                </div>
           <!-- </div> -->
        <?php  }}}; ?>
            </div>
            <div class="col-12 col-md-4">
                <div class="options">
                    <a href="index.php" class="btn btn-link">Continue Shopping</a>
                    <a href="checkout.php" class="btn btn-warning">Procede to Checkout</a>
                </div>
            </div>
            </div>     
        
            
        </div>
            </main>
            <footer class="footer py-5 px-2 text-light">
        <div class="container">
                <div class="row">
                    <div class="col-6 col-md-4">
                        <h4>About Us</h4>
                        <p>This is a fictional website created by Fernando Hernandez. No orders will be fulfilled. This is only an assignment for a programming class at BYU-Idaho.</p>
                    </div>
                </div>
        </div>
    </footer>
        <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>
</html>