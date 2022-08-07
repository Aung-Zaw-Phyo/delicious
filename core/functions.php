<?php

function dd ($data) {
    echo '<pre>';
    print_r($data);
    die();
}

function view ($filename, $data=[]) {
    extract($data);
    return require "views/$filename.view.php";
}

function take ($file) {
    return require "$file";
}