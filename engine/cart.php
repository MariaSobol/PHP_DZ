<?php
// В сессии в массиве корзины будет хранится только id продукта (ключ) и количество (значение):
//function addToCart($product_id, $quantity = 1){
//    if (is_null(getSessionParam('cart'))){
//        setSessionParam('cart', []);
//    }
//
//    $cart = getSessionParam('cart');
//
//    if(!array_key_exists($product_id, $cart)){
//        $cart[$product_id] = $quantity;
//    } else{
//        $cart[$product_id] +=  $quantity;
//    }
//
//    setSessionParam('cart', $cart);
//}

// В сессии в массиве корзины будут хранится id продукта (ключ) и подмассив с названием продукта, его стоимостью и количеством:
function addToCart($product_id, $product_name, $product_price, $quantity = 1){
    if (is_null(getSessionParam('cart'))){
        setSessionParam('cart', []);
    }

    $cart = getSessionParam('cart');

    if(!array_key_exists($product_id, $cart)){
        $cart[$product_id] = [
            'product_name' => $product_name,
            'product_price' => $product_price,
            'quantity' => $quantity, ];
    } else{
        $cart[$product_id]['quantity'] +=  $quantity;
    }

    setSessionParam('cart', $cart);
}

