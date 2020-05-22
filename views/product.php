<?php
/** @var array $product */
?>

<h1><?=$product['name']?></h1>
<a href="<?=$product['imagelink']?>" target="_blank"><img class="main-image" src="<?=$product['imagelink']?>" alt="<?=$product['name']?>"></a>
<p>Цена: <?=$product['price']?> руб.</p>

<form action="" method="post">
<input name="add_to_cart" value="Купить" type="submit"/>
</form>

<p class="description"><?=$product['description']?></p>
<br>

<h2>Отзывы:</h2>
<?php include VIEWS_DIR . "comments.php";?>
<br>

<?php include VIEWS_DIR . "upload_comment.php";?>

