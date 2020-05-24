<?php
function setSession(){
    if (is_null($_SESSION)){
        session_start();
    }
}

function setSessionParam($key, $value){
    setSession();
    $_SESSION[$key] = $value;
}

function getSessionParam($key){
    setSession();
    return $_SESSION[$key];
}

function logout(){
    setSession();
    foreach ($_SESSION as $key => $value){
        unset($_SESSION[$key]);
    }
    session_destroy();
}