<?php
require_once __DIR__ . '/../config/main.php';
require VENDOR_DIR . "funcImgResize.php";
require ENGINE_DIR . "gallery.php";
require ENGINE_DIR . "files.php";
require ENGINE_DIR . "base.php";

$menu = ['Главная', 'Каталог', 'Контакты'];
$year = date("Y");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //К проверке на существования файла добавляем проверку соответствия типа и размера загружаемого файла:
    if(isset($_FILES['my_file']) &&
        validateImage($_FILES['my_file']['type'], $_FILES['my_file']['size']))
    {
        if(!file_exists(IMAGES_DIR)) {
            mkdir(IMAGES_DIR);
            mkdir(IMAGES_DIR . "small");
        }

       $filename = IMAGES_DIR . $_FILES['my_file']['name'];
       uploadFile($filename, 'my_file');
       img_resize($filename, IMAGES_DIR . "small/" . $_FILES['my_file']['name'], 200, 150);
    }

    redirect('/gallery.php');
}

//Загрузка галереи при условии существования папки img
if(file_exists(IMAGES_DIR))
{
    $files = getGalleryFiles(IMAGES_DIR);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ДЗ №4</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper container">
    <div class="top">
        <?php
        include VIEWS_DIR . "menu.php";
        include VIEWS_DIR . "gallery.php";
        include VIEWS_DIR . "upload_form.php";
        ?>
    </div>
    <footer class="footer">
        <p>Copyright &copy; <?=$year?> Maria Sobol</p>
    </footer>
</div>
</body>
</html>