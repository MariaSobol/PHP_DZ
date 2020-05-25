<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ДЗ №2</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <?php
    $title = "Урок 2. Условные блоки, ветвление функции";
    $taskText = "Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.";
    $year = date("Y");
    ?>

    <div class="wrapper">
        <div class="top">
            <h1>Название урока: "<?= $title?>"</h1>
            <p>Текст задания: <?= $taskText?></p>
        </div>
        <footer class="footer">
            <p>Copyright &copy; <?=$year?> Maria Sobol</p>
        </footer>
    </div>
</body>
</html>