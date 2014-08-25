<?php

class Application
{
	public $_e = array();
	
	public function onAppBegin($event)
	{
		$this->raiseEvent('onAppBegin',$event);
	}
	public static function run()
	{
		global $C;
		
		$control = !empty($_GET['con']) ? trim($_GET['con']) : $C['DEFAULT'];
		$action = !empty($_GET['act']) ? trim($_GET['act']) : $C['DEFAULT_ACTION'];
		$action = ucfirst($action);
		
		$controllerFile = ROOT_PATH.'/Controller/'.$control.'Controller.php';
		if(!file_exists($controllerFile))
		{
			exit("{$control} Controller file not exist.");
		}
		include($controllerFile);
		$class = ucfirst($control);
		
		if(!class_exists($class)) exit("{$class} doesn't exist.");
		
		$instance = new $class();

		if(!method_exists($instance, $action)) //判断实例$instance中是否存在$action方法, 不存在则提示错误
		{
			exit("{$class}类中不存在方法:". $action);
		}
		$instance->$action();
		
		
	}
	
	public function onAppEnd($event)
	{
		$this->raiseEvent('onAppEnd',$event);		
	}
	
	public function raiseEvent($name,$event)
	{
		
	}
}