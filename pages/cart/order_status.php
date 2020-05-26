<?php
$menu = include_once CONFIG_DIR . "menu.php";

if($status = get('status')){
    $status = "Спасибо за заказ!";
}else{
    $status = "Что-то пошло не так!";
}

header( "refresh:5;/product" );

echo renderWithWrap('layout', ['menu' => ['menu' => $menu],
                                    'message_form' => ['message' => $status]]);
