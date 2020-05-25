<?php
/** @var $content */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>ДЗ</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="wrapper container">
    <div class="top">
<!--        --><?php //include VIEWS_DIR . "menu.php";?>
        <?=$content?>
    </div>
    <footer class="footer">
        <p>Copyright &copy; <?=$year?> Maria Sobol</p>
    </footer>
</div>
</body>
</html>
