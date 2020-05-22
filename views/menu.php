<?php
/** @var array $menu */
?>

<ul class="menu">
    <?php foreach ($menu as $name => $link): ?>
        <li class="menu__list">
            <a href="/<?=$link?>"><?=$name?></a>
        </li>
    <?php endforeach;?>
</ul>
