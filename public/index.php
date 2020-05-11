<?php
require_once __DIR__ . '/../config/main.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_FILES['my_file'])) {
        if(!file_exists(IMAGES_DIR)) {
            mkdir(IMAGES_DIR);
        }

        move_uploaded_file(
            $_FILES['my_file']['tmp_name'],
            IMAGES_DIR . $_FILES['my_file']['name']
        );
    }
}


$form_title = "Загрузка картинок";
include VIEWS_DIR . "upload_form.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ДЗ №4</title>
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