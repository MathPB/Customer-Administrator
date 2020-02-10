<?php 

namespace App\Core;

class Model {

    private static $instance;

    public static function getConn(){
        if(!isset(self::$instance)){
            self::$instance = new \PDO ('mysql:host=localhost;dbname=adm', 'root', '1590');
        };

        return self::$instance;
    }
}