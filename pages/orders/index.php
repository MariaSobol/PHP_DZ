<?php

$orders = getAllOrders();

echo renderWithWrap('layout', [
    'orders' => ['orders' => $orders]
]);
