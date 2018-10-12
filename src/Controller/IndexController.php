<?php
namespace Crud\Controller;

use Crud\View\View;

class IndexController
{
	public function index()
	{
		$view = new View('sites/index.php');
		return $view->render();
	}
}



?>