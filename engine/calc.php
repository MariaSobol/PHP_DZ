<?php
//Используем функции из дз ко второму уроку:
function add($arg1, $arg2) {
    if(is_numeric($arg1) && is_numeric($arg2)){
        return $arg1 + $arg2;
    }
    return "Аргументы заданы неверно";
}

function subtract($arg1, $arg2) {
    if(is_numeric($arg1) && is_numeric($arg2)){
        return $arg1 - $arg2;
    }
    return "Аргументы заданы неверно";
}

function multiply($arg1, $arg2) {
    if(is_numeric($arg1) && is_numeric($arg2)){
        return $arg1 * $arg2;
    }
    return "Аргументы заданы неверно";
}

function divide($arg1, $arg2) {
    if(is_numeric($arg1) && is_numeric($arg2)){
        if($arg2 == 0){
            return "Деление на ноль невозможно";
        }
        return $arg1 / $arg2;
    }
    return "Аргументы заданы неверно";
}

function mathOperation($arg1, $arg2, $operation){
    switch ($operation) {
        case "+":
            return add($arg1, $arg2);
            break;
        case "-":
            return subtract($arg1, $arg2);
            break;
        case "*":
            return multiply($arg1, $arg2);
            break;
        case "/":
            return divide($arg1, $arg2);
            break;
        default:
            return "Значение операции задано неверно.";
    }
}