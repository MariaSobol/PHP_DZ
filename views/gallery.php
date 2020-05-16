<?php
/** @var array $files */
?>

<?php foreach ($files as $image): ?>
    <a href="/photo.php?id=<?=$image['id']?>" target="_blank"><img src="/img/small/<?=$image['name']?>" alt=""></a>
<?php endforeach;?>
