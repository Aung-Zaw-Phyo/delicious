<?php

use core\Request;
use core\Router;

require 'vendor/autoload.php';
require 'boot.php';


Router::load('routes.php')->direct($_SERVER['REQUEST_METHOD'], Request::uri());