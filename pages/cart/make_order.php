<?php
if (getSessionParam('user_login')){
    redirect('/auth/login');
} else{
    $userId = getSessionParam('user_id');
    $cart = getSessionParam('cart');
    if(addOrder($userId, $cart)){
        //TODO: redirect();
    }else{
        //TODO: redirect();
    }
}



