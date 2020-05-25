<?php
//6. *С помощью рекурсии организовать функцию возведения числа в степень.
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power ($val, $pow){
    if ($pow == 0)
        return 1;
    else if ($pow == 1)
        return $val;
    else if ($pow > 1)
        return $val * power($val, ($pow - 1));
    else //возведение в отрицательную степень
        return 1 / power($val, -$pow);
}

$a = rand(-10, 10);
$b = rand(-10, 10);

echo "$a в степени $b = ", power ($a, $b);
