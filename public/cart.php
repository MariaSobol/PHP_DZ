<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "sessions.php";
require ENGINE_DIR . "cart.php";
require ENGINE_DIR . "render.php";

$cart = getSessionParam('cart');
var_dump($cart);
