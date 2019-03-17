<?php
namespace Crud\Controller;

use Crud\View\View,
	Crud\Model\Usuario;

class UsuarioController
{
	public function index()
	{
		$view = new View('site/index.php');
		return $view->render();
	}

	public function cadastrar()
	{
		$dados = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$retorno = (new Usuario())->cadastrar($dados);
		var_dump($retorno);
	}
}



?>