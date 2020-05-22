<div class="product-in-cart">
    <div>Название товара</div>
    <div>Цена за ед.</div>
    <div>Количество</div>
    <div>Сумма</div>
</div>
<?php foreach ($cart as $product_id => $product): ?>
    <div class="product-in-cart">
        <div><?=$product['product_name']?></div>
        <div><?=$product['product_price']?> руб.</div>
        <div><?=$product['quantity']?></div>
        <div><?=$product['product_price'] * $product['quantity']?> руб.</div>
        <form action="" method="post">
            <button type="submit" name="add" value="<?=$product_id?>">+</button>
            <button type="submit" name="reduce" value="<?=$product_id?>">-</button>
            <button type="submit" name="delete" value="<?=$product_id?>">X</button>
        </form>
    </div>
<?php endforeach;?>
<br>
<h2>Итого: <?=$sum?> руб.</h2>

