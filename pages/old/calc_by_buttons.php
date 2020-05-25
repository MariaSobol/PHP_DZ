<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "calc.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $operation = post('operation');
    $arg1 = post('arg1');
    $arg2 = post('arg2');
    $answer = mathOperation($arg1, $arg2, $operation);
    $answer = "{$arg1}" . " {$operation} " . "{$arg2}" . " = " . "{$answer}";
}

include VIEWS_DIR . "calc_by_buttons.php";
?>