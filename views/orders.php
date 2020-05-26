<div class="orders">
    <div>Номер заказа</div>
    <div>Покупатель</div>
    <div>Статус</div>
</div>
<?php foreach ($orders as $item): ?>
    <div class="orders">
        <div><?=$item['id']?></div>
        <div><?=$item['user_id']?></div>
        <div><?=$item['status_id']?></div>
    </div>
<?php endforeach;?>