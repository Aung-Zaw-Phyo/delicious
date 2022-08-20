<?php

use core\App;

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
    if(strlen($data)==0){
        setcookie('err', "All fields are required to fill!", time() + 1);
        header("location: $uri");
        exit();
    }
    if (!(strlen($data)>=$count)) {
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

function emailCheck ($email, $uri) {
    if(strlen($email)==0){
        setcookie('err', "Email field is required!", time() + 1);
        header("location: $uri");
        exit();
    }
    if(strlen($email) >= 13){
        $check = preg_match('/^[a-zA-Z0-9]+@[a-z]+\.+[a-z]{2,4}+$/', $email);
        if (!$check) {
            redirect($uri, 'Invalid Email!');
        }
    }else {
        redirect($uri, 'Email must be at least 13 characters!');
    }
}

function setSession ($username, $id=null, $isAdmin=false) {
    if(!$id){
        $id = App::get('db')->fetch('users', 'username', $username)[0]->id;
    }
    $_SESSION['user'] = [
        'username' => $username,
        'id' => $id,
        'is_admin' => $isAdmin
    ];
}


function registerCheck ($name, $username, $email, $password) {
    checkCount($name, 3, 'register', 'Name must be at least 3 characters!');
    checkCount($username, 3, 'register', 'Username must be at least 3 characters!');
    emailCheck($email, 'register');
    checkCount($password, 6, 'register', 'Password must be at least 6 characters!');
    
    $isUserExist = App::get('db')->isExist('users', 'username', $username);
    if($isUserExist){
        redirect('register', "Username is already had!");
    }
    
    $isEmailExist = App::get('db')->isExist('users', 'email', $email);
    if($isEmailExist){
        redirect('register', "Email is already been taken!");
    }
}

function liginCheck ($email, $password) {
    emailCheck($email, 'login');
    checkCount($password, 6, 'login', 'Password must be at least 6 characters!');

    $isEmailExist = App::get('db')->isExist('users', 'email', $email);
    if(!$isEmailExist){
        redirect('login', 'Email is not existed!');
    }
    
    return App::get('db')->fetch('users', 'email', $email)[0];
}

function auth () {
    if(!isset($_SESSION['user'])){
        redirect('login', 'Please login!');
    }
}

function admin () {
    if( !( isset($_SESSION['user']) && $_SESSION['user']['is_admin'] ) ) {
        redirect('/');
    }
}