<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "sessions.php";
require ENGINE_DIR . "cart.php";
require ENGINE_DIR . "render.php";
$menu = include_once ENGINE_DIR . "menu.php";

$cart = getSessionParam('cart');
$sum = getCartSum();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($id = post('add')){
        changeQuantityByProductId($id);
    } elseif ($id = post('reduce')) {
        changeQuantityByProductId($id, -1);
    } elseif ($id = post('delete')) {
        deleteFromCart($id);
    }

    redirect('/cart.php');
}

echo renderWithWrap('layout', [
                                    'menu' => ['menu' => $menu],
                                    'cart' => ['cart' => $cart, 'sum' => $sum]]);



