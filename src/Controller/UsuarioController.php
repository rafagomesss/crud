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

	public function realizarCadastro()
	{
		return (new View('site/Usuario/cadastro.php'))->render();
	}

	public function cadastrar()
	{
		$dados = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$retorno = (new Usuario())->cadastrar($dados);
		if($retorno) {
			header("Location: /");
		}
	}

	public function listar()
	{
		$view = new View('site/Usuario/lista.php');
		$view->usuarios = (new Usuario())->listarUsuario();
		return $view->render();
	}
}



?>