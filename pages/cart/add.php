<?php

$productId = (int) post('product_id');
$productQty = (int) post('quantity');

addToCart($productId, $productQty);

redirect($_SERVER['HTTP_REFERER']);