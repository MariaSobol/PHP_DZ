<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "db.php";
require ENGINE_DIR . "users.php";
require ENGINE_DIR . "sessions.php";
require ENGINE_DIR . "render.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = post('login');
    $password = post('password');
    $user = getUserByLogin($login);

    if ($user && $user['password'] == getHash($password)) {
        setSessionParam('user_id', $user['id']);
        setSessionParam('user_login', $login);
        setSessionParam('user_name', $user['name']);
        redirect('/my-account.php');
    } else {
        echo "Указано неверное имя пользователя или пароль. Повторите ввод информации";
    }
}

echo renderWithWrap('layout', ['login_form' => []]);
?>

