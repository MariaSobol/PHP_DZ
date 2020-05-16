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
       saveImage($_FILES['my_file']['name'], $filename, $_FILES['my_file']['size']);
    }

    redirect('/gallery.php');
}

$files = getGallery();

include VIEWS_DIR . "main.php";
?>




