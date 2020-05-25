<?php
//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
function add($arg1, $arg2) {
    return $arg1 + $arg2;
}

function subtract($arg1, $arg2) {
    return $arg1 - $arg2;
}

function multiply($arg1, $arg2) {
    return $arg1 * $arg2;
}

function divide($arg1, $arg2) {
    return $arg1 / $arg2;
}

//4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
// В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3)
// и вернуть полученное значение (использовать switch).
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

$a = rand(-100, 100);
$b = rand(-100, 100);

echo "a = $a, b = $b";
echo "<br>";
echo "a + b = ", mathOperation($a, $b, "+");
echo "<br>";
echo "a - b = ", mathOperation($a, $b, "-");
echo "<br>";
echo "a * b = ", mathOperation($a, $b, "*");
echo "<br>";
echo "a / b = ", mathOperation($a, $b, "/");