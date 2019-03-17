<?php
namespace Crud\Model;

use Classes\Model;

class Usuario extends Model
{
	protected $table = 'usuario_conta';

	public function cadastrar(array $dados)
	{
		return $this->inserir($dados);
	}
}



?>