<?php
require_once ENGINE_DIR . "db.php";

function addOrder(int $userId, array $cart){
    $sqlAddOrder = "INSERT INTO orders (user_id)
                    VALUES ('{$userId}')";

    if (execute($sqlAddOrder)){
        $order_id = getInsertedId();

        foreach($cart as $product_id => $quantity) {
            $sql = "INSERT INTO product_in_order (product_id, order_id, quantity)
                    VALUES ('{$product_id}', '{$order_id}', '{$quantity}')";
            if (!execute($sql)){
                return false;
            }
        }
    }
    else{
        return false;
    }
    return true;
}

function getAllOrders(){
    $sql = "SELECT * FROM orders";
    return queryAll($sql);
}

function getAllStatuses(){
    $sql = "SELECT * FROM order_status";
    return queryAll($sql);
}

function changeOrderStatus(int $order_id, int $status_id){
    $sql ="UPDATE orders
           SET status_id = '{$status_id}'
           WHERE id = '{$order_id}'";

    return execute($sql);
}

