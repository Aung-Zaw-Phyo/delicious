<?php

namespace controllers;

use core\App;

class PagesController {

    public function index () {
        return view('pages/index', [
            'products' => App::get('db')->fetchAllLimit('products', 4)
        ]);
    }    

    public function about () {
        return view('pages/about');
    }

    public function contact () {
        return view('pages/contact');
    }

    public function message () {
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            // check 
            checkCount($name, 3, 'contact', 'Name must be at least 3 characters!');
            emailCheck($email, 'contact');
            checkCount($phone, 5, 'contact', 'Phone number must be at least 5 characters!');
            checkCount($subject, 3, 'contact', 'Subject must be at least 3 characters!');
            checkCount($message, 10, 'contact', 'Message must be at least 10 characters!');

            App::get('db')->insert('messages', [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'subject' => $subject,
                'message' => $message,
            ]);

            redirect('contact', 'Recieved your message!');
        }
    }

    public function product () {
        $start = 0;
        if ( isset($_GET['page']) ) {
            $point = $_GET['page'] * 8;
            $start = $point - 8;
        }
        $products = App::get('db')->fetchAllLimit('products', $start, 8);
        $counts = App::get('db')->count('products');

        if (isset($_GET['category'])) {
            $category = $_GET['category'];
            $result = App::get('db')->isExist('categories', 'name', $category);
            if(!$result){
                redirect('product');
            }
            $id = App::get('db')->fetch('categories', 'name', $category)[0]->id;
            $products = App::get('db')->fetch('products', 'category_id', $id, $start, 8);
            $counts = App::get('db')->count('products', 'category_id', $id);
        }
        return view('pages/product', [
            'page' => $_GET['page']?? 1,
            'counts' => $counts,
            'products' => $products,
            'categories' => App::get('db')->fetchAll('categories')
        ]);
    }

    public function news () {
        $start = 1;
        if ( isset($_GET['page']) ) {
            $point = $_GET['page'] * 6;
            $start = $point - 6;
        }
        $fetchAll = App::get('db')->fetchAllLimit('news', $start, 6);
        return view('pages/news', [
            'page' => $_GET['page']??$start,
            'counts' => App::get('db')->count('news'),
            'news' => $fetchAll
        ]);
    }

    public function single_news () {
        if(!isset($_GET['id'])){
            redirect('news');
        }
        $id = $_GET['id'];
        $start = 0;
        if ( isset($_GET['page']) ) {
            $point = $_GET['page'] * 3;
            $start = $point - 3;
        }
        $counts = App::get('db')->count('comments', 'news_id', $id);
        $comments = App::get('db')->fetch('comments', 'news_id', $id, $start, 3);
             
        return view('pages/single_news', [
            'news' => App::get('db')->fetch('news', "id", $id),
            'comments' => $comments,
            'counts' => $counts,
            'page' => $_GET['page']?? 1,
        ]);
    }

    public function comment () {
        if(isset($_POST['submit'])){
            $newsId = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            
            $message = $_POST['message'];
            checkCount($name, 3, "single_news?id=$newsId", 'Name must be at least 3 characters!');
            emailCheck($email, "single_news?id=$newsId");
            checkCount($message, 10, "single_news?id=$newsId", 'Message must be at least 10 characters!');
            
            App::get('db')->insert('comments', [
                'news_id' => $newsId,
                'name' => $name,
                'email' => $email,
                'message' => $message
            ]);
            redirect("single_news?id=$newsId", 'Commented successfully!');
        }
    }
}