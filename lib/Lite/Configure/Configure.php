<?php
namespace Lite\Configure;
class Configure
{
    public static $_config = [];
    public static function loadFile($name){
        return require APP_CONFIG_PATH.DS.$name.".php";
    }

    //App.debug   => App.php  debug
    public static function get($key){
        $section = $key;
        $name = '';
        if(strpos($key,'.') !== false){
            list($section,$name) = explode('.',$key);
        }
        if(!isset(self::$_config[$section])){
            $configs =  self::load($section);
        }
        return  $name ? self::$_config[$section][$name] :
            (self::$_config[$section] ? self::$_config[$section] : self::$_config);


    }
    //key=>App.mongth  value =3
    public static function set($key,$value){
        $section = $key;
        $name = '';
        if(strpos($key,'.') !== false){
            list($section,$name) = explode('.',$key);
        }
        if(!isset(self::$_config[$section])){
            self::load($section);
        }

       $name ? self::$_config[$section][$name] = $value : self::$_config[$section][] = $value;
    }

    public static function load($section){
        $cfg =  self::loadFile($section);
        self::$_config[$section] = $cfg;
        return $cfg;
    }
}