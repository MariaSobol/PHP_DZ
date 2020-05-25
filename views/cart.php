<div class="product-in-cart">
    <div>Название товара</div>
    <div>Цена за ед.</div>
    <div>Количество</div>
    <div>Сумма</div>
</div>
<?php foreach ($cart as $item): ?>
    <div class="product-in-cart">
        <div><?=$item['product']['name']?></div>
        <div><?=$item['product']['price']?> руб.</div>
        <div><?=$item['quantity']?></div>
        <div><?=$item['product']['price'] * $item['quantity']?> руб.</div>
        <form action="" method="post">
            <button type="submit" name="add" value="<?=$item['product']['id']?>">+</button>
            <button type="submit" name="reduce" value="<?=$item['product']['id']?>">-</button>
            <button type="submit" name="delete" value="<?=$item['product']['id']?>">X</button>
        </form>
    </div>
<?php endforeach;?>
<br>
<h2>Итого: <?=$sum?> руб.</h2>
<br>
<form action="/cart/make_order" method="post">
    <input value="Оформить заказ" type="submit"/>
</form>
