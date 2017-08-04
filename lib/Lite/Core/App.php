<?php
namespace Lite\Core;
/**
 * Class App
 * @package Lite\Core
 * @desc 加载和启动框架应用
 */
class App
{
    protected static $_classMap = array();
    public static function load($className){

        $className = str_replace('\\',DS,$className);
        $controller = substr($className,strrpos(rtrim($className,DS),DS)+1,strlen($className));
        $location = substr($className,0,strrpos(rtrim($className,DS),DS)+1);
        if(!isset(self::$_classMap[$className])){
            self::$_classMap[$controller] = $location;
        }
        self::loadClass();
    }

    public static function uses($className,$location){
        if(!isset(self::$_classMap[$className])){
            self::$_classMap[$className] = $location;
        }
    }

    public static function loadClass(){
        if(!empty(self::$_classMap)){
            foreach(self::$_classMap as $className=>$location){
                $file = $location.$className.'.php';
                require $file;
            }
        }
    }

    public static function run(){
        spl_autoload_register(self::class."::load");
    }
}