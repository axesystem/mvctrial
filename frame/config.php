<?php

if(!defined('IN_FRAME'))
    exit('access deny');


  $C = array(
	  'URL_MODE'=>1,//url模式,1为普通模式,2为path_info模式
	  'DEFAULT'=>'welcome',//默认的控制器
	  'DEFAULT_ACTION'=>'index'//默认的方法
  );