<?php

$menu = include_once CONFIG_DIR . "menu.php";

$id = get('id');
$product = getProduct($id);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //TODO: убрать в отдельный скрипт
    if(post('add_comment')) {
        $author_name = post('author');
        $content = post('content');
        saveComment($id, $author_name, $content);
    }

    redirect('/card.php?id=' . "{$id}");
}

$comments = getComments($id);

echo renderWithWrap('layout', [
                    'menu' => ['menu' => $menu],
                    'product' => ['product' => $product, 'comments' => $comments]
                    ]);