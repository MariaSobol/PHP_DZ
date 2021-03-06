<?php

function getConnection(){
    $dbConfig = include_once CONFIG_DIR . "db.php";
    static $conn = null;
    if (is_null($conn)){
        $conn =  mysqli_connect($dbConfig['host'], $dbConfig['login'], $dbConfig['password'], $dbConfig['db_name']);
    }
    return $conn;
}

function execute(string $sql){
  return mysqli_query(getConnection(), $sql);

    //TODO: вариант с обработкой ошибки
//    if (!$res = mysqli_query(getConnection(), $sql)) {
//        var_dump(mysqli_error(getConnection()));
//    }
//    return $res;
}

function queryAll(string $sql){
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function queryOne(string $sql){
    return queryAll($sql)[0];
}

function closeConnection(){
    return mysqli_close(getConnection());
}