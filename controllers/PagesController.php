<?php

namespace controllers;

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

    public function post () {
        dd('hit');
    }

}