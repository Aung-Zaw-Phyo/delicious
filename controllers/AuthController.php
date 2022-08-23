<?php

namespace controllers;

use core\App;

class AuthController {
    public function __construct()
    {
        
    }

    public function login () {
        guest();
        return view('auth/login');
    }

    public function register () {
        guest();
        return view('auth/register');
    }

    public function post_register () {
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            // check
            registerCheck($name, $username, $email, $password);

            $password = password_hash($password, PASSWORD_BCRYPT);
            $return = App::get('db')->insert('users', [
                'name' => $name,
                'username' => $username,
                'email' => $email,
                'password' => $password
            ]);
            setSession($username);
            redirect('/', 'Wormly welcome!');
        }
    }

    public function post_login () {
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = liginCheck($email, $password);
            
            $id = $user->id;
            $hash = $user->password;
            $username = $user->username;
            $isAdmin = $user->is_admin;

            if( password_verify($password, $hash) ) {
                setSession($username, $id, $isAdmin);
                redirect('/', 'Welcome back!');
            }else {
                redirect('login', 'Password is wrong!');
            }
        }
    }

    public function logout () {
        if(isset($_POST['submit'])){
            unset($_SESSION['user']);
            redirect('/', 'Good Bye!');
        }
    }

}