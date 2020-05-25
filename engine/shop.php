<?php
require_once ENGINE_DIR . "db.php";

function getGatalog(): array {
    $sql = "SELECT id, name, price, imagelink FROM goods";
    return queryAll($sql);
}

function getProduct(int $id){
    $sql = "SELECT * FROM goods WHERE id = {$id}";
    return queryOne($sql);
}

function getProductsbyIds(array $ids){
    $in = implode(', ', $ids);
    $sql = "SELECT id, name, price FROM goods WHERE id IN ({$in})";
    return queryAll($sql);
}