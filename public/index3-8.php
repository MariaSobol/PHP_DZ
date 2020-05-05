<?php
//8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».

$array = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Сасово', 'Скопин']
];

foreach ($array as $key => $item) {
    $filteredItem = array_filter($item, function($city) {
        return (substr($city, 0, 2) == "К");
    });

    echo "$key:<br>", implode(', ', $filteredItem), "<br>";
}
