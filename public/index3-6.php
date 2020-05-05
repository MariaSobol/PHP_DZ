<?php
//6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP.
// Необходимо представить пункты меню как элементы массива и вывести их циклом.
// Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.

$title = "Урок 3. Циклы и массивы";
$taskText = "В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом.";
$year = date("Y");
$menu = ['Главная', 'Каталог', 'Контакты']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ДЗ №3</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <div class="top">
        <nav>
            <ul class="menu">
                <?php foreach ($menu as $item): ?>
                    <li class="menu__list"><?=$item?></li>
                <?endforeach;?>
            </ul>
        </nav>
        <h1>Название урока: "<?= $title?>"</h1>
        <p>Текст задания: <?= $taskText?></p>
    </div>
    <footer class="footer">
        <p>Copyright &copy; <?=$year?> Maria Sobol</p>
    </footer>
</div>
</body>
</html>