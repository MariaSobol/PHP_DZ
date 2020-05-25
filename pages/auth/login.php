<?php
$menu = include_once CONFIG_DIR . "menu.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = post('login');
    $password = post('password');
    $user = getUserByLogin($login);

    if ($user && $user['password'] == getHash($password)) {
        setSessionParam('user_id', $user['id']);
        setSessionParam('user_login', $login);
        setSessionParam('user_name', $user['name']);
        redirect($_SERVER['HTTP_REFERER']);
    } else {
        echo "Указано неверное имя пользователя или пароль. Повторите ввод информации";
    }
}

echo renderWithWrap('layout', ['login_form' => []]);
?>

