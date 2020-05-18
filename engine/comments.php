<?php
require_once ENGINE_DIR . "db.php";

function getComments(int $product_id): array {
    $sql = "SELECT author_name, content FROM comments WHERE product_id = {$product_id}";
    return queryAll($sql);
}

function saveComment(int $product_id, string $author_name, string $content){
    $con = getConnection();
    $author_name = mysqli_real_escape_string($con, (string)htmlspecialchars(strip_tags($author_name)));
    $content = mysqli_real_escape_string($con, (string)htmlspecialchars(strip_tags($content)));

    $sql = "INSERT INTO comments (product_id, author_name, content)
        VALUES ('{$product_id}', '{$author_name}', '{$content}')";
    return execute($sql);
}