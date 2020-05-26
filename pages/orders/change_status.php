<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $order_id = (int)post('order_id');
    $status_id = (int)post('status_id');
    changeOrderStatus($order_id, $status_id);
}
