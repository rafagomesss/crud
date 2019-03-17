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
		$sql = "INSERT INTO usuario(NOME, EMAIL, SEXO, DT_NASCIMENTO) VALUES (:nome, :email, :sexo, :dt_nacimento)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':nome', $dados['nomeUsuario'], PDO::PARAM_STR);
		$stmt->bindParam(':email',$dados['emailUsuario'], PDO::PARAM_STR);
		$stmt->bindValue(':sexo', 'M', PDO::PARAM_STR);
		$stmt->bindValue(':dt_nacimento', 'NOW()', PDO::PARAM_STR);
		return $stmt->execute();
	}

	private function bind()
	{

	}
}