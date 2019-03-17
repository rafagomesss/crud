<?php
namespace Classes;

use \PDO,
	Classes\DB\Connection;

class Model
{
	protected $conn;

	public function __construct()
	{
		$this->conn = Connection::conexao();
	}

	public function inserir(array $dados): bool
	{
		$sql = "INSERT INTO " . $this->table . "(EMAIL, SENHA) VALUES (:email, :senha)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':email', $dados['emailUsuario'], PDO::PARAM_STR);
		$stmt->bindParam(':senha', $dados['senhaUsuario'], PDO::PARAM_STR);
		return $stmt->execute();
	}

	private function bind()
	{

	}
}