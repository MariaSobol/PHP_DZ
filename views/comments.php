<?php
/** @var array $comments */
?>

<?php
if($comments) {
    ?>
    <?php foreach ($comments as $comment): ?>
        <h3>Автор: <?=$comment['author_name']?></h3>
        <p><?=$comment['content']?></p>
    <?php endforeach;?>
    <?php
} else {
    ?>
    <p>К этому товару ещё нет отзывов. Станьте первым!</p>
    <?php
}
?>
