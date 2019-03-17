<?php
namespace Classes;

class Router
{
	public static function routeValidate()
	{

		$url = substr($_SERVER['REQUEST_URI'], 1);
		$url = explode('/', $url);

		$controller = isset($url[0]) && $url[0] ? $url[0] : 'index';
		$action     = isset($url[1]) && $url[1] ? $url[1] : 'index';
		$param     = isset($url[2]) && $url[2] ? $url[2] : null;

		if(!class_exists($controller = "Crud\Controller\\" . ucfirst($controller) . 'Controller')) {
			print (new \Crud\View\View('404.php'))->render();
			die;
		}

		if(!method_exists($controller, $action)) {
			$action = 'index';
			$param  = $url[1];
		}

		$response = call_user_func_array([new $controller, $action], [$param]);

		print $response;
	}
}