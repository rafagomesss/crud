<?php
namespace Crud\Model;

use Classes\Model;

class Usuario extends Model
{
	public function cadastrar(array $dados)
	{
		return $this->inserir($dados);
	}
}



?>