<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . "gallery.php";

$id = (int)$_GET['id'];
$image = getImage($id);

addCount($id);

include VIEWS_DIR . "photo.php";