<?php
$menu = include_once CONFIG_DIR . "menu.php";

if (!empty(getSessionParam('cart'))) {
    $productsIds = array_keys(getSessionParam('cart'));
    $products = getProductsbyIds($productsIds);
    $cart = [];
    foreach ($products as $product) {
        $cart[] = [
            'product' => $product,
            'quantity' => getSessionParam('cart')[$product['id']]
        ];
    }
    $sum = getCartSum($cart);
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($id = post('add')){
        changeQuantityByProductId($id);
    } elseif ($id = post('reduce')) {
        changeQuantityByProductId($id, -1);
    } elseif ($id = post('delete')) {
        deleteFromCart($id);
    }

    redirect('/cart');
}

echo renderWithWrap('layout', [
                                    'menu' => ['menu' => $menu],
                                    'cart' => ['cart' => $cart, 'sum' => $sum]]);


