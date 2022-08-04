<?php

namespace controllers;

use core\App;

class PagesController {

    public function index () {
        return view('pages/index', [
            'users' => App::get('db')->fetchAll('users')
        ]);
    }    

    public function about () {
        return view('pages/about');
    }

    public function contact () {
        return view('pages/contact');
    }

    public function post () {
        dd('hit');
    }

}