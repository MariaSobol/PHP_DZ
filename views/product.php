<?php
/** @var array $product */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1><?=$product['name']?></h1>
    <a href="<?=$product['imagelink']?>" target="_blank"><img class="main-image" src="<?=$product['imagelink']?>" alt="<?=$product['name']?>"></a>
    <p>Цена: <?=$product['price']?> руб.</p>
    <p class="description"><?=$product['description']?></p>
    <br>

    <h2>Отзывы:</h2>
    <?php include VIEWS_DIR . "comments.php";?>
    <br>

    <?php include VIEWS_DIR . "upload_comment.php";?>

</div>
</body>
</html>
