<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "shop.php";
require ENGINE_DIR . "comments.php";

$menu = ['Главная', 'Каталог', 'Контакты'];

$id = (int)$_GET['id'];
$product = getProduct($id);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $author_name = post('author');
    $content = post('content');
    saveComment($id, $author_name, $content);

    redirect('/product.php?id=' . "{$id}");
}

$comments = getComments($id);

include VIEWS_DIR . "product.php";
