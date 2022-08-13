<?php

function dd ($data) {
    echo '<pre>';
    print_r($data);
    exit();
}

function view ($filename, $data=[]) {
    extract($data);
    return require "views/$filename.view.php";
}

function take ($file) {
    return require "$file";
}

function checkCount ($data,int $count, $uri, $err=null) {
    if (!(strlen($data)>$count)) {
        if ($err) {
            setcookie('err', $err, time() + 1);
        }
        header("location: $uri");
        exit();
    }
}

function redirect ($uri, $err=null) {
    if($err){
        setcookie('err', $err, time() + 1);
    }
    header("location: $uri");
    exit();
}