<?php

use core\Request;
use core\Router;

require 'boot.php';
require 'vendor/autoload.php';


Router::load('routes.php')->direct($_SERVER['REQUEST_METHOD'], Request::uri());