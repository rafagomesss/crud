<?php
namespace Crud\Controller;

use Crud\View\View;

class UsuarioController
{
	public function index()
	{
		$view = new View('sites/index.php');
		return $view->render();
	}
}



?>