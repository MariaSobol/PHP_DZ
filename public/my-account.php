<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "render.php";
require ENGINE_DIR . "sessions.php";

if (getSessionParam('user_login')) {
    $login = getSessionParam('user_login');
    $user_name = getSessionParam('user_name');

    echo renderWithWrap('layout', ['my_account' => ['login' => $login, 'user_name' => $user_name]]);
}
else {redirect('/login.php');}
?>
