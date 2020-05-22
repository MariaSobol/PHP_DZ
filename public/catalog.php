<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . "shop.php";
require ENGINE_DIR . "render.php";
require ENGINE_DIR . "base.php";

$menu = ['Главная', 'Каталог', 'Контакты'];

$goods = getGatalog();

echo renderWithWrap('layout', ['menu' => ['menu' => $menu], 'catalog' => ['goods' => $goods]]);
?>


