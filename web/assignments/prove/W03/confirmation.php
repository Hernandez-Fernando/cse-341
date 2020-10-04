<?php
session_start();
require_once 'data.php';

    $firstname = htmlspecialchars($_POST['name']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $address = htmlspecialchars($_POST['address']);
    $apt = htmlspecialchars($_POST['apt']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $zip = htmlspecialchars($_POST['zip']);

    $userProducts = $_SESSION['userCartItems'];
    $_SESSION['orderCompleted'] = 1;

    $userProducts = $_SESSION['userCartItems'];
    $userTotal = 0;

    foreach($userProducts as $userProduct) {

        foreach($products as list($id, $name, $price, $image)) {

            if($userProduct == $id) {
                $userTotal += $price;
            }
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
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
            <div class="row">
                <div class="col-12">
                    <h2>Order Created!</h2>
                    <p>Thank you for placing your order. We will notify you once we ship your items.</p>
                </div>
                <div class="col-12 col-md-8 mt-4">
                    <h4 class="mb-3">Order # <?= mt_rand(100000, 999999); ?></h4>
                    <h5>Shipping Information</h5>
                    <p><?php echo $firstname . " " . $lastname ?></p>
                    <p><?php echo $address . " " . $apt ?></p>
                    <p><?php echo $city . ", " . $state . " " . $zip ?></p>

                    <h5 class="mt-4 mb-3">Your Items</h5>
                    <div class="row">
                    <div class="col-12 mb-2 d-flex justify-content-between text-uppercase font-weight-bold">
                        <p>&nbsp;</p>
                        <p>Description</p>
                        <p>Price</p>
                    </div>
<?php 
    foreach($userProducts as $userProduct) {

        foreach($products as list($id, $name, $price, $image)) {

            if($userProduct == $id) {
     ?>    
                <div class="col-12 mb-4">
                    <div class="product-cart align-items-center">
                        <div class="product-cart-container"><img src="img/products/<?= $image; ?>" alt="Product Placeholder" class="product-cart-image"></div>
                        <div class="product-cart-description">
                            <h3 class="product-cart-name"><?=$name; ?></h3>
                        </div>
                        <div class="product-cart-description">
                            <p class="product-cart-price">&dollar; <?= $price; ?></p>
                        </div>
                    </div>
                </div>
        <?php  }}}; ?>
            </div>
            </div>
            
                <div class="col-12 col-md-4">
                    <div class="subtotal-area">
                        <h4>Order Total: <?= $userTotal; ?>.00 USD</h4>
                        <a href="index.php" class="btn btn-warning d-block">Start New Order</a>
                    </div>
                    
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
</body>
</html>