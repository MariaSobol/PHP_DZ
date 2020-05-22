<?php
function addToCart($product_id, $quantity = 1){
    if (is_null(getSessionParam('cart'))){
        setSessionParam('cart', []);
    }

    $cart = getSessionParam('cart');

    if(!array_key_exists($product_id, $cart)){
        $cart[$product_id] = $quantity;
    } else{
        $cart[$product_id] +=  $quantity;
    }

    setSessionParam('cart', $cart);
}
