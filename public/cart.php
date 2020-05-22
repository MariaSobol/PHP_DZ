<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "sessions.php";
require ENGINE_DIR . "cart.php";
require ENGINE_DIR . "render.php";

$cart = getSessionParam('cart');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($id = post('add')){
        changeQuantityByProductId($id);
    } elseif ($id = post('reduce')) {
        changeQuantityByProductId($id, -1);
    }


    redirect('/cart.php');
}

echo renderWithWrap('layout', ['cart' => ['cart' => $cart]]);



