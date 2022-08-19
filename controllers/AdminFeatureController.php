<?php

namespace controllers;

use core\App;

class AdminFeatureController {
    public function __construct()
    {
        
    }

    public function users () {
        $start = 0;
        if ( isset($_GET['page']) ) {
            $point = $_GET['page'] * 10;
            $start = $point - 10;
        }

        $fetchAll = App::get('db')->fetchAllLimit('users', $start, 10);
        return view('admin/users', [
            'page' => $_GET['page']??1,
            'counts' => App::get('db')->count('users'),
            'users' => $fetchAll
        ]);
    }

    public function user_delete () {
        if ( isset($_POST['submit']) ) {
            $id = $_POST['id'];
            App::get('db')->delete('users', $id);
            redirect('users', 'User deleted!');
        }
    }

    public function admin_contact () {
        $start = 0;
        if ( isset($_GET['page']) ) {
            $point = $_GET['page'] * 6;
            $start = $point - 6;
        }

        $fetchAll = App::get('db')->fetchAllLimit('messages', $start, 6);
        return view('admin/contact', [
            'page' => $_GET['page']??1,
            'counts' => App::get('db')->count('messages'),
            'messages' => $fetchAll
        ]);
    }

    public function admin_orders () {
        $start = 0;
        if ( isset($_GET['page']) ) {
            $point = $_GET['page'] * 6;
            $start = $point - 6;
        }

        $fetchAll = App::get('db')->orderJoin(
                        'orders', 'users', 'user_id', 'id', 
                        'INNER', ['username'],'pending', $start, 6);
                       
        return view('admin/orders', [
            'page' => $_GET['page']??1,
            'counts' => App::get('db')->count('orders', 'action', 'pending'),
            'orders' => $fetchAll
        ]);
    }

    public function order_complete () {
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            App::get('db')->update('orders', [
                'action' => 'complete'
            ], $id);
            redirect('admin_orders', 'Completion!');
        }
    }

    public function user_order () {
        if(!isset($_GET['id'])){
            redirect('users');
        }
        $userId = $_GET['id'];
        
        return view('admin/user_order', [
            'orders' => App::get('db')->orders($userId, 'complete'),
            'user' => App::get('db')->fetch('users', 'id', $userId)
        ]);
    }
}