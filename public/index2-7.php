<?php
//7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
//
//22 часа 15 минут
//21 час 43 минуты

function getCurrentTime() {
    $hours = date("H");
    $minutes = date("i");

    if ($hours == 1 || $hours == 21){
        $currentTime = $hours . " час ";
    }
    else if ($hours > 4 || $hours < 21) {
        $currentTime = $hours . " часов ";
    }
    else {
        $currentTime = $hours . " часа ";
    }

    if (($minutes%10 == 1) && ($minutes != 11)){
        $currentTime = $currentTime . $minutes . " минута";
    }
    else if ((($minutes%10 == 2) ||($minutes%10 == 3) || ($minutes%10 == 4))
            && (($minutes < 5) || ($minutes > 20))) {
        $currentTime = $currentTime . $minutes . " минуты";
    }
    else {
        $currentTime = $currentTime . $minutes . " минут";
    }

    return $currentTime;
}

echo getCurrentTime();