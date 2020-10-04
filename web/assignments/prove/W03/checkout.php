<?php
session_start();
require_once 'data.php';
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
    <title>Checkout</title>
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
                </nav>
        </div>
    </header>
    <main class="main py-5">
    <div class="container">
        
        <div class="row">
            <a href="shoppingCart.php" class="btn btn-link mb-4">&#8249; Back to shopping Cart</a>
            <h3 class="col-12 mb-3">Checkout</h3>
            <div class="col-12">
            <form action="confirmation.php" method="post" class="row">
                <div class="col-12 col-md-8">
                <h5>Customer Information</h5>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="name">First Name</label>
                <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group col-md-6">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address">
            </div>
            <div class="form-group">
                <label for="apt">Apt. / Unit</label>
                <input type="text" class="form-control" id="apt" placeholder="Apartment, studio, or floor" name="apt">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="form-group col-md-4">
                <label for="state">State</label>
                <select id="state" class="form-control" name="state">
                    <option selected>Choose...</option>
                    <?php 
                        foreach($states as $state) { ?>
                    <option value="<?= $state; ?>"><?= $state; ?></option>
                        <?php } ?>
                </select>
                </div>
                <div class="form-group col-md-2">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip">
                </div>
            </div>
            <div class="row row-cols-1">
            <h4 class="mt-4 mb-3 col">Your Items</h4>
<?php 
    foreach($userProducts as $userProduct) {

        foreach($products as list($id, $productName, $price, $image)) {

            if($userProduct == $id) {
     ?>    
                <div class="col-12 mb-4">
                    <div class="product-cart align-items-center">
                        <div class="product-cart-container"><img src="img/products/<?= $image; ?>" alt="Product Placeholder" class="product-cart-image"></div>
                        <div class="product-cart-description">
                            <h3 class="product-cart-name"><?= $productName; ?></h3>
                        </div>
                        <div class="product-cart-description">
                            <p class="product-cart-price">&dollar; <?= $price; ?></p>
                        </div>
                    </div>
                </div>
        <?php  }}}; ?>
            </div>
            </div>
                <div class="col-12 col-md-4 pt-3 pb-4">
                    <div class="subtotal-area">
                        <h4>Your total is: <?= $userTotal; ?>.00 USD</h4>
                        <button type="submit" class="btn btn-warning w-100">Place Order</button>
                    </div>
                </div>
            </form> 

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