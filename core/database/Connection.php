<?php

namespace core\database;

use PDO;
use PDOException;

class Connection {

    public static function make ($database) {
        try {
            return new PDO("mysql: dbhost={$database['host']}; 
                                dbname={$database['name']}", 
                                "{$database['user']}", 
                                "{$database['pass']}");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}