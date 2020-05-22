<?php
function addToCart($product_id){
    if (is_null(getSessionParam('cart'))){
        setSessionParam('cart', []);
    }
    $cart = getSessionParam('cart');

}
