<?php
namespace Lite\Core;
class App
{
    protected static $_classMap = array();
    public static function load($className){
        print_r($className);
        $className = str_replace('\\',DS,$className);
        print_r($className);
        print_r(explode(DS,$className));
        $ns = array_shift(explode(DS,$className));
        print_r($ns);
        exit;
        require $className.".php";
    }

    public static function uses($className,$location){
        if(!isset(self::$_classMap[$className])){
            self::$_classMap[$className] = $location;
        }
    }

    public static function get(){
        print_r(self::$_classMap);
    }
}