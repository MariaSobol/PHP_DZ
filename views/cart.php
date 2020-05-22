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
<!--        <form action="" method="post">-->
<!--            <input id="--><?//=$product_id?><!--" name="add" value="+" type="submit"/>-->
<!--            <input name="operation" value="-" type="submit"/>-->
<!--            <input name="operation" value="X" type="submit"/>-->
<!--        </form>-->
    </div>
<?php endforeach;?>
