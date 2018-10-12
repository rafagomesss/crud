<?php

namespace Crud\Controller;

use Crud\View\View;

class CadastroController
{
	public function index()
	{
		$view = new View('sites/cadastro.php');
		return $view->render();
	}
}


?>