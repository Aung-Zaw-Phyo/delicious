<?php

namespace controllers;

use core\App;

class SystemController {

    public function __construct()
    {
        
    }

    public function cart () {
        $userId = $_SESSION['user']['id'];
        $carts = App::get('db')->join('carts', 'products', 'product_id', 'id', 'user_id',  $userId, 'INNER',['name', 'price', 'thumbnail']);
        return view('pages/cart', [
            'carts' => $carts
        ]);
    }

    public function post_cart () {
        if(isset($_POST['submit'])){
            $productId = $_POST['id'];
            $userId = $_SESSION['user']['id'];
            App::get('db')->insert('carts', [
                'user_id' => $userId,
                'product_id' => $productId
            ]);
            redirect('product', 'Cart added!');
        }
    }

    public function update_cart () {
        if( isset($_POST['submit']) ) {
            $count = $_POST['count'];
            $id = $_POST['id'];
            App::get('db')->update('carts', [
                'count' => $count
            ], $id);
            redirect('cart', 'Cart updated!');
        }
    }

    public function delete_cart () {
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            App::get('db')->delete('carts', $id);
            redirect('cart', 'Cart deleted!');
        }
    }

    public function checkout () {
        $userId = $_SESSION['user']['id'];
        $carts = App::get('db')->join('carts', 'products', 'product_id', 'id', 'user_id', $userId, 'INNER', ['name', 'price']);
        return view('pages/checkout', [
            'carts' => $carts
        ]);
    }

    public function post_order () {
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];

            checkCount($name, 3, 'checkout', 'Name must be at least 3 characters!');
            emailCheck($email, 'checkout');
            checkCount($address, 6, 'checkout', 'Address must be at least 6 characters!');
            checkCount($phone, 5, 'checkout', 'Phone number must be at least 5 characters!');
            checkCount($message, 10, 'checkout', 'Message must be at least 10 characters!');
            
            $userId = $_SESSION['user']['id'];
            $carts = App::get('db')->join('carts', 'products', 'product_id', 'id', 'user_id', $userId, "INNER", ['name', 'price']);
            $products = '';
            $totalPrice = 0;
            foreach($carts as $cart){
                $products .= $cart->name .' - '. $cart->count. ' , ';
                $totalPrice += $cart->price * $cart->count;
            }

            App::get('db')->insert('orders', [
                'user_id' => $userId,
                'name' => $name,
                'email' => $email,
                'address' => $address,
                'phone' => $phone,
                'message' => $message,
                'products' => $products,
                'total_price' => $totalPrice
            ]);
            foreach($carts as $cart){
                App::get('db')->delete('carts', $cart->id);
            }
            redirect('order', 'Ordered Successfully!');
        }
    }

    public function order () {
        $userId = $_SESSION['user']['id'];
        $action = 'pending';
        $orders = App::get('db')->orders($userId, $action);
        return view('pages/order', [
            'orders' => $orders
        ]);
    }

}