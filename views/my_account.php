<?php
/**
 * @var string $login
 * @var string $user_name
 */
?>

<h2>Логин: <?= $login?></h2>
<p>Добро пожаловать, <?=$user_name?></p>
<br>
<form action="" method="post">
    <input name="logout" value="Выход" type="submit"/>
</form>

