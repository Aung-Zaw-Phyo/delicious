<?php

use core\App;
use core\database\Connection;
use core\database\QueryBuilder;

session_start();

require 'core/functions.php';

App::bind('config', require 'config.php');
App::bind(
    'db', 
    new QueryBuilder(Connection::make(App::get('config')['database']))
);


