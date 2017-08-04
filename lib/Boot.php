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
if(!defined('CORE_CONFIG_PATH')){
    define('CORE_CONFIG_PATH',__DIR__.DS.'Lite'.DS.'Configure');
}

//加载App.php
require CORE_PATH.DS.'App.php';
require LITE_PATH.DS.'Helper.php';

//设置include path
set_include_path(LITE_PATH.PATH_SEPARATOR.
  //  CORE_CONFIG_PATH.PATH_SEPARATOR.
    APP_CONFIG_PATH.PATH_SEPARATOR.
    APP_MODEL_PATH.PATH_SEPARATOR.
    get_include_path());

\Lite\Core\App::run();


