<?php
/**
 * @param string $source
 * @return array
 */

function getGalleryFiles(string $source): array {
    if(file_exists(IMAGES_DIR)){
        return array_filter(
            scandir($source),
            function ($item) use ($source) {
                return !is_dir($source . $item);
            }
        );
    }
    return [];
}

require_once ENGINE_DIR . "db.php";

function getGallery(): array {
    if(file_exists(IMAGES_DIR)){
        $sql = "SELECT * FROM images ORDER BY count DESC";
        return queryAll($sql);
    }
    return [];
}

function saveImage(string $name, string $path, int $size){
    $con = getConnection();
    $name = mysqli_real_escape_string($con, $name);
    $path = mysqli_real_escape_string($con, $path);
    $size = (int)$size;

    $sql = "INSERT INTO images (name, path, size)
        VALUES ('{$name}', '{$path}', '{$size}')";
    return execute($sql);
}

function getImage(int $id){
    $sql = "SELECT * FROM images WHERE id = {$id}";
    return queryOne($sql);
}

function addCount(int $id){
    $sql = "UPDATE images SET count =  count + 1 WHERE id = {$id}";
    return execute($sql);
}