<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . "shop.php";

$menu = ['Главная', 'Каталог', 'Контакты'];

$goods = getGatalog();

include VIEWS_DIR . "shop.php";
?>


