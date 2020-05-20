<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . "shop.php";
require ENGINE_DIR . "render.php";

$menu = ['Главная', 'Каталог', 'Контакты'];

$goods = getGatalog();

$content = render("catalog", ['goods' => $goods]);
echo render('layout', ['content' => $content, 'menu' => $menu]);
?>


