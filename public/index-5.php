<?php
//5. *Используя только две целочисленные переменные, поменяйте их значение местами.
// Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2.
// Дополнительные переменные использовать нельзя.
$a = 1;
$b = 2;

echo "a = $a, b = $b\n";

$a += $b;
$b = $a - $b;
$a = $a - $b;

echo "a = $a, b = $b";
?>