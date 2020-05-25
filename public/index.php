<?php
require_once __DIR__ . '/../config/main.php';
require_once ENGINE_DIR . "autoload.php";
session_start();

//var_dump($_SERVER['REQUEST_URI']);
//exit();
if (!$requestUri = preg_replace(['#^/#', "#[?].*#"], "", $_SERVER['REQUEST_URI'])) {
    $requestUri = 'product';
}

//var_dump($requestUri);
//exit();

$parts = explode("/", $requestUri);
$page = $parts[0];
$action = $parts[1] ?? "index";

$scriptName = PAGES_DIR . $page . "/" . $action . ".php";


if (file_exists($scriptName)) {
    include $scriptName;
} else {
    echo "Такой страницы нет!";
}
