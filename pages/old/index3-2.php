<?php
//2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
//
//0 – ноль.
//1 – нечетное число.
//2 – четное число.
//3 – нечетное число.
//…
//10 – четное число.

function writeNumbers() {
    $x = 0;
    echo "$x - ноль.<br>";
    do {
        $x++;
        $evenness = ($x % 2) ? 'нечетное число' : 'четное число';
        echo "$x - $evenness.<br>";
    } while ($x < 10);
}

writeNumbers();