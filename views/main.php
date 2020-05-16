<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ДЗ</title>
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
