<?php


$statuses = getAllStatuses();

$orders = getAllOrders();

echo renderWithWrap('layout', [
    'orders' => ['orders' => $orders, 'statuses' => $statuses]
]);
