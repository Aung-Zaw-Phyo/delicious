<?php

namespace core;

class Router {

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get ($uri, $controllerAndMethod) {
        $this->routes['GET'][$uri] = $controllerAndMethod;
    }

    public function post ($uri, $controllerAndMethod) {
        $this->routes['POST'][$uri] = $controllerAndMethod;
    }

    public static function load ($filename) {
        $router = new Router;
        require $filename;
        return $router;
    }

    public function direct ($method, $uri) {
        if (! array_key_exists( $uri, $this->routes[$method]) ) {
            require 'views/404.php';
            die();
        }
        $explosion = $this->routes[$method][$uri];
        $this->callAction($explosion[0], $explosion[1]);
    }

    public function callAction ($class, $method) {
        //(new class)->method();

        $class = new $class;
        $class->$method();
    }

}