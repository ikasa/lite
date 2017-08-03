<?php
//use lite\Boot;

/**
 * @desc 框架入口文件
 */
//toDo 添加composer的加载文件，后期支持

if(!defined('DS')){
    define('DS',DIRECTORY_SEPARATOR);
}

if(!defined('ROOT_PATH')){
   // define('ROOT_PATH',realpath('../../'));
  //  define('ROOT_PATH',dirname(dirname(dirname(__FILE__) ) ) );
    define('ROOT_PATH',dirname(dirname(__DIR__)  ) );

}
if(!defined('LITE_PATH')){
    define('LITE_PATH',ROOT_PATH.DS.'lib');
}
if(!defined('APP_PATH')){
   define('APP_PATH',ROOT_PATH.DS.'app');
}

//设置include path
/*if(function_exists('ini_set')){
    ini_set('include_path',LITE_PATH.PATH_SEPARATOR.ini_get('include_path'));
}*/

set_include_path(LITE_PATH.PATH_SEPARATOR.get_include_path());

print_r(get_include_path());

