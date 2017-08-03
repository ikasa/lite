<?php
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

if(!defined('APP_PATH')){
   define('APP_PATH',ROOT_PATH.DS.'app');
}



 include ROOT_PATH.DS.'lib'.DS.'Boot.php';





