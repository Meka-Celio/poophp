<?php 

namespace app;

class App {

    public $title = "Demo POO";
    private static $_instance = null;
    
    public static function getInstance () {
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public static function getTable ($name) {
        $class_name = '\\app\\tables\\' . ucfirst($name) . 'Table';
        return new $class_name();
    } 



}