<?php
/** @var array $menu */
?>

<ul class="menu">
    <?php foreach ($menu as $item): ?>
        <li class="menu__list">
            <a href="#"><?=$item?></a>
        </li>
    <?php endforeach;?>
</ul>
