<div class="orders">
    <div>Номер заказа</div>
    <div>Покупатель</div>
    <div>Статус</div>
</div>
<?php foreach ($orders as $item): ?>
    <div class="orders">
        <div><?=$item['id']?></div>
        <div><?=$item['user_id']?></div>
        <div>
            <select id="change_status" data-order_id="<?=$item['id']?>" name="operation" id="status">
            <?php foreach ($statuses as $status): ?>
                <?php if ($status['id'] != $item['status_id']) {?>
                    <option value="<?=$status['id']?>"><?=$status['status']?></option>
                <?php } else {?>
                    <option selected value="<?=$status['id']?>"><?=$status['status']?></option>
                <?php }?>
            <?php endforeach;?>
            </select>
        </div>
    </div>
<?php endforeach;?>
<script>
    $(function () {
        $(document).on('change', '#change_status', function(){
            var order_id = $(this).data('order_id');
            var status_id = $(this).val();
            $.ajax({
                url : "/orders/change_status",
                type: "POST",
                data: {
                    order_id: order_id,
                    status_id: status_id
                },
                success : function (response) {
                    response = JSON.parse(response);
                    if(response.success == 'ok'){
                        alert(response.message)
                    }
                }
            })
        })
    })
</script>
