<?php
/** @var array $goods */
?>

<div class="product-box">
    <?php foreach ($goods as $product): ?>
    <div class="product">
        <a href="/product/card?id=<?=$product['id']?>"><img class="product__img" src="<?=$product['imagelink']?>" alt="<?=$product['name']?>"></a>
        <div class="product__text">
            <a href="/product/card?id=<?=$product['id']?>" class="product__name"><?=$product['name']?></a>
            <p class="product__price"><?=$product['price']?></p>
        </div>

    </div>
    <?php endforeach;?>
</div>

