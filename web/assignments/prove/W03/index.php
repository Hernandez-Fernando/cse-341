<?php
    session_start();
    if(isset($_SESSION['orderCompleted'])) {
        if($_SESSION['orderCompleted'] == 1) {
            session_destroy();
            session_start();
        }
    }
    
    require_once 'data.php';

    if(isset($_SESSION['userCartItems'])) {
        $userProducts = $_SESSION['userCartItems'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
                    <div class="user-nav-icon-box">
                        <a href="shoppingCart.php">
                            <svg class="user-nav-icon">
                                <use xlink:href="img/sprite.svg#icon-cart"></use>
                            </svg>
                            <span id="items-in-cart" class="<?php if(isset($_SESSION['cartCount']) && $_SESSION['cartCount'] != 0) { 
                                    echo "user-nav-notification";
                                }; ?>">
                                <?php if(isset($_SESSION['cartCount'])) { 
                                    echo $_SESSION['cartCount'];
                                }; ?>
                            </span></a>
                    </div>
                </nav>
        </div>
    </header>
    <main class="main py-5">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
                <?php foreach($products as list($id, $name, $price, $image)) { ?>    
                <div class="col mb-4">
                    <div class="product">
                        <div class="product-container"><img src="img/products/<?= $image; ?>" alt="Product Placeholder" class="product-image"></div>
                        <div class="product-description">
                            <h4 class="product-name"><?=$name; ?></h4>
                            <p class="product-price">
                            <svg class="product-price-icon">
                                <use xlink:href="img/sprite.svg#icon-price-tags"></use>
                            </svg>    
                            &dollar; <?= $price; ?>
                        </p>
                            <div class="product-actions"><a href="details.php?id=<?=$id;?>" class="btn btn-link">View Details</a>
                            <?php 
                            if(isset($userProducts)){
                                if(in_array($id, $userProducts)) { ?>
                                        <button id="<?=$id;?>" class="product-cart-button btn btn-success" disabled>&#x2713; In Cart</button>
                                    <?php } else { ?>
                                        <button id="<?=$id;?>" class="product-cart-button btn btn-warning">Add to Cart</button>
                                    <?php }} else { ?>
                                        <button id="<?=$id;?>" class="product-cart-button btn btn-warning">Add to Cart</button>
                                    <?php }; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <?php  }; ?>

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