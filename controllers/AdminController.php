<?php

namespace controllers;

class AdminController {

    public function index () {
        return view('admin/index');
    }

    public function product_create () {
        return view('admin/product_create');
    }

    public function admin_news () {
        return view('admin/admin_news');
    }

    public function news_create () {
        return view('admin/news_create');
    }

    public function admin_category () {
        return view('admin/admin_category');
    }

    public function category_create () {
        return view('admin/category_create');
    }

}