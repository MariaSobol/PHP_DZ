<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "shop.php";
require ENGINE_DIR . "comments.php";
require ENGINE_DIR . "render.php";
require ENGINE_DIR . "sessions.php";
require ENGINE_DIR . "cart.php";
$menu = include_once ENGINE_DIR . "menu.php";

$id = get('id');
$product = getProduct($id);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(post('add_to_cart')){
        //addToCart($id);
        addToCart($id, $product['name'], $product['price']);
    }
    if(post('add_comment')) {
        $author_name = post('author');
        $content = post('content');
        saveComment($id, $author_name, $content);
    }

    redirect('/product.php?id=' . "{$id}");
}

$comments = getComments($id);

echo renderWithWrap('layout', [
                    'menu' => ['menu' => $menu],
                    'product' => ['product' => $product, 'comments' => $comments]
                    ]);