<?php
namespace Lite\Http;
class Request{
    protected static $_baseUrl;
    protected static $params = array();
    public static function getBaseUrl(){
        if(!self::$_baseUrl){
            self::setBaseUrl();
        }
        return self::$_baseUrl;
    }

    public static function setBaseUrl(){
        self::$_baseUrl = $_SERVER;
    }


}