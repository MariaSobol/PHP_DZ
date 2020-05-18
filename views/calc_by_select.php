<?php
/** @var string $answer */
?>

<form action="" method="post">
    <select name="operation" id="">
        <option value="+">Сложение</option>
        <option value="-">Вычитание</option>
        <option value="*">Умножение</option>
        <option value="/">Деление</option>
    </select>
    <input name="arg1" type="text"/>
    <input name="arg2" type="text"/>
    <input type="submit">
</form>

<p><?=$answer?></p>
