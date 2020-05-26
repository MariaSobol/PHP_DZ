<?php

if (!getSessionParam('user_login') == 'admin'){
    redirect('/auth/login');
} else{
    $statuses = getAllStatuses();

    $orders = getAllOrders();

    echo renderWithWrap('layout', [
        'orders' => ['orders' => $orders, 'statuses' => $statuses]
    ]);
}

