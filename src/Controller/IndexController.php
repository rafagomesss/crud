<?php
namespace Crud\Controller;

use Crud\View\View;

class IndexController
{
	public function index()
	{
		$view = new View('site/index.php');
		return $view->render();
	}
}



?>