<?php
/**
 * @param string $url
 */
 function redirect(string $url): void
 {
     header("Location: {$url}");
     exit;
 }

function get($name) {
    $name = htmlspecialchars(strip_tags($name));
    return $_GET[$name];
}

function post($name) {
    $name = htmlspecialchars(strip_tags($name));
    return $_POST[$name];
}