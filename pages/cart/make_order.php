<?php
if (!getSessionParam('user_login')){
    redirect('/auth/login');
}
else{
    $userId = getSessionParam('user_id');
    $cart = getSessionParam('cart');
    if($orderStatus = addOrder($userId, $cart)){
        clearCart();
    }
    redirect('/cart/order_status?status=' . "{$orderStatus}");
}



