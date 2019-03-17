<?php
namespace Crud\Controller;

use Crud\View\View;

class CadastroController
{
	public function index()
	{
		$view = new View('site/Usuario/cadastro.php');
		return $view->render();
	}
}


?>