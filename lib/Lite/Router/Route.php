<?php
namespace Lite\Router;
use Lite\Http\Request;

class Route{
    public $_controller;
    public $_action;
    public function route(){
        return Request::getBaseUrl();
    }
}