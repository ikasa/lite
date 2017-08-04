<?php
namespace Lite\Core;
use Lite\Configure\Configure;
use Lite\Request\Request;
use Lite\Router\Route;
class Applications{
    public $config;
    public $route;
    private static $instance;
    public function __construct(){
        $this->getRouter();//加载路由
        $this->getConfigure();
    }

   public function getRouter(){
        $this->route = new Route();
    }
    public function getConfigure(){
        $this->config = new Configure();
    }


    public function execute(){
       pr( $this->route->route() );
    }

}