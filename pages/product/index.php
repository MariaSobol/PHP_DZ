<?php

$menu = include_once CONFIG_DIR . "menu.php";

$goods = getGatalog();

echo renderWithWrap('layout', ['menu' => ['menu' => $menu], 'catalog' => ['goods' => $goods]]);
?>


