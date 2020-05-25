<?php
$menu = include_once CONFIG_DIR . "menu.php";


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(post('logout')){
        logout();
    }
}

if (getSessionParam('user_login')) {
    $login = getSessionParam('user_login');
    $user_name = getSessionParam('user_name');

    echo renderWithWrap('layout', [
                                        'menu' => ['menu' => $menu],
                                        'my_account' => ['login' => $login, 'user_name' => $user_name]]);
}else {
    redirect('/auth/login');
}
?>

