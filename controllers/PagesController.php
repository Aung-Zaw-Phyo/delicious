<?php

namespace controllers;

use core\App;

class PagesController {

    public function index () {
        return view('pages/index');
    }    

    public function about () {
        return view('pages/about');
    }

    public function contact () {
        return view('pages/contact');
    }

    public function product () {
        return view('pages/product');
    }

    public function news () {
        return view('pages/news');
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

    public function post () {
        dd('hit');
    }

}