<?php
// В сессии в массиве корзины будет хранится только id продукта (ключ) и количество (значение):
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

// В сессии в массиве корзины будут хранится id продукта (ключ) и подмассив с названием продукта, его стоимостью и количеством:
//function addToCart($product_id, $product_name, $product_price, $quantity = 1){
//    if (is_null(getSessionParam('cart'))){
//        setSessionParam('cart', []);
//    }
//
//    $cart = getSessionParam('cart');
//
//    if(!array_key_exists($product_id, $cart)){
//        $cart[$product_id] = [
//            'product_name' => $product_name,
//            'product_price' => $product_price,
//            'quantity' => $quantity, ];
//    } else{
//        $cart[$product_id]['quantity'] +=  $quantity;
//    }
//
//    setSessionParam('cart', $cart);
//}

//function changeQuantityByProductId($product_id, $quantity = 1){
//    $cart = getSessionParam('cart');
//
//    $cart[$product_id]['quantity'] +=  $quantity;
//
//    if($cart[$product_id]['quantity'] < 1) {
//        unset($cart[$product_id]);
//    }
//
//    setSessionParam('cart', $cart);
//}


function changeQuantityByProductId($product_id, $quantity = 1){
    $cart = getSessionParam('cart');

    $cart[$product_id] +=  $quantity;

    if($cart[$product_id] < 1) {
        unset($cart[$product_id]);
    }

    setSessionParam('cart', $cart);
}


function deleteFromCart($product_id){
    $cart = getSessionParam('cart');
    unset($cart[$product_id]);
    setSessionParam('cart', $cart);
}

//function getCartSum(){
//    $cart = getSessionParam('cart');
//    $sum = 0;
//    foreach($cart as $product) {
//        $sum += $product['product_price'] * $product['quantity'];
//    }
//    return $sum;
//}

function getCartSum(array $cart){
    $sum = 0;
    foreach($cart as $item) {
        $sum += $item['product']['price'] * $item['quantity'];
    }
    return $sum;
}

require_once ENGINE_DIR . "db.php";

function addOrder(int $userId, array $cart){
    $sqlAddOrder = "INSERT INTO orders (user_id)
                    VALUES ('{$userId}')";

    //TODO: получить $order_id
    $order_id = 0;

    if (execute($sqlAddOrder)){
        foreach($cart as $product_id => $quantity) {
            $sql = "INSERT INTO product_in_order (product_id, order_id, quantity)
                    VALUES ('{$product_id}', '{$order_id}', '{$quantity}')";
            if (!execute($sql)){
                return false;
            }
        }
    }else{
        return false;
    }
    return true;
}
