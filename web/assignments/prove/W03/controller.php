<?php
    session_start();
    require_once 'data.php';


    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL){
        $action = filter_input(INPUT_GET, 'action');
    }


    switch ($action) {
        case 'add':
            $productId = filter_input(INPUT_POST, 'productId');

            // FIND PRODUCT ON LIST
            foreach($products as list($id, $name, $price, $image)) { 
                if($productId == $id) {
                    if(isset($_SESSION['userCartItems'])){
                        $cartItems = $_SESSION['userCartItems'];
                    }
                    array_push($cartItems, $id);
                }
            }

            $itemsCount = count($cartItems);
            $_SESSION['userCartItems'] = $cartItems;
            $_SESSION['cartCount'] = $itemsCount;
            echo $itemsCount;
            
        break;

        case 'remove':
            $productId = filter_input(INPUT_POST, 'productId'); 
            $userProducts = $_SESSION['userCartItems'];
            
            
            if(($productKey = array_search($productId, $userProducts)) !== false) {
                unset($userProducts[$productKey]);
            }
            
            $itemsCount = count($userProducts);
            $_SESSION['userCartItems'] = $userProducts;
            $_SESSION['cartCount'] = $itemsCount;

            
            if($itemsCount != 0) {
                echo $productsReturn = loadUserItems($userProducts, $products);
            } else {
                unset($_SESSION['cartCount']);
                echo "<div class='col-12'><h3>Your Cart is Empty</h3></div>";
            }

        break;

    }


    function loadUserItems($userProducts, $products) {
        
        foreach($userProducts as $userProduct) {

            foreach($products as list($id, $name, $price, $image)) {
    
                if($userProduct == $id) {
         ?>    
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
            <?php  }}}; 

    } ?>