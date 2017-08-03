<?php
//定义所有需要敞亮
if(!defined('APP_CONFIG_PATH')){
    define('APP_CONFIG_PATH',APP_PATH.DS.'config');
}
if(!defined('APP_CONTROLLER_PATH')){
    define('CTRL_PATH',APP_PATH.DS.'controller');
}

if(!defined('APP_MODEL_PATH')){
    define('APP_MODEL_PATH',APP_PATH.DS.'controller');
}
if(!defined('LITE_PATH')){
   define('LITE_PATH',__DIR__);
}
if(!defined('CORE_PATH')){
    define('CORE_PATH',__DIR__.DS.'Lite'.DS.'Core');
}

//加载App.php
require CORE_PATH.DS.'App.php';

spl_autoload_register('\Lite\Core\App::load');
//设置include path
/*if(function_exists('ini_set')){
    ini_set('include_path',LITE_PATH.PATH_SEPARATOR.ini_get('include_path'));
}*/

set_include_path(LITE_PATH.PATH_SEPARATOR.
    APP_CONFIG_PATH.PATH_SEPARATOR.
    APP_MODEL_PATH.PATH_SEPARATOR.
    get_include_path());

\Lite\Core\App::get();
\Lite\Controller\Controller::run();
\Lite\Core\App::get();
