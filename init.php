<?php

if(!defined('IN_FRAME'))
    exit('access deny');

header("Content-Type:text/html; charset=utf-8");

if(!defined('ROOT_PATH'))
    define('ROOT_PATH',dirname(__FILE__));

require ROOT_PATH.'/frame/config.php';
require ROOT_PATH.'/frame/application.php';
//require ROOT_PATH.'/frame/view.class.php';
//require ROOT_PATH.'/frame/model.class.php';
