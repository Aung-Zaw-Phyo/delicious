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

    public function cart () {
        return view('pages/cart');
    }

    public function checkout () {
        return view('pages/checkout');
    }

    public function order () {
        return view('pages/order');
    }

    public function single_news () {
        $id = $_GET['id'];
        return view('pages/single_news', [
            'news' => App::get('db')->fetch('news', "id", $id)
        ]);
    }
}