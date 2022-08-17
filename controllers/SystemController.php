<?php

namespace controllers;

class SystemController {

    public function __construct()
    {
        
    }

    public function cart () {
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            dd($id);
        }
    }

}