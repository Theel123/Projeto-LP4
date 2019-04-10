<?php

Class Editora {

	private $conexao;

	public function __construct() {
		$this->conexao = new PDO("mysql:host=localhost;dbname=biblioteca","root","");
	}


	public function adicionar($nome,$cnpj){

		if($this->existeNome($nome) == false){

	$sql    = "INSERT INTO biblioteca.editora (editora_nome,editora_cnpj) VALUES (:nome,:cnpj)";
	$result = $this->conexao->prepare($sql);
	$result->bindValue(':nome', $nome);
	$result->bindValue(':cnpj', $cnpj);
	$result->execute();
	return true;

		} else {

			return false;
		}
	}

	public function getNome($sobrenome) {

		$sql = "SELECT editora_nome FROM biblioteca.editora WHERE editora_cnpj = :cnpj";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':cnpj', $cnpj);
	$result->execute();

		if($result->rowCount()>0) {

			$info = $result->fetch();

			return $info['editora_nome'];
		} else {
			return'';
		}
	}


	public function getInfo ($id) {

		$sql = "SELECT * FROM biblioteca.editora WHERE id_editora = :id";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':id',$id);
		$result->execute();

			if($result->rowCount()>0){

				return $result->fetch();

			} else {

				return array();
			}
	}

	public function getAll() {

		$sql = "SELECT * FROM biblioteca.editora";
		$result = $this->conexao->query($sql);

		if($result->rowCount()>0) {

			return $result->fetchAll();
		} else {
			return array();
		}
	}

public function editar($nome,$cnpj,$id){

		if($this->existeNome($nome) == false) {
			
			$sql = "UPDATE biblioteca.editora SET editora_nome = :nome, editora_cnpj = :cnpj where id_editora = :id";
			$result = $this->conexao->prepare($sql);
			$result->bindValue(':nome', $nome);
			$result->bindValue(':cnpj', $cnpj);
			$result->bindValue(':id', $id);
			$result->execute();

			return true;
		} else {

			return false;
		}
	}

		public function excluir($id) {
			$sql = "DELETE FROM biblioteca.editora WHERE id_editora = :id";
			$result = $this->conexao->prepare($sql);
			$result->bindValue(':id', $id);
			$result->execute();
	}


	private function existeNome($nome){

		$sql = "SELECT * FROM biblioteca.editora WHERE editora_nome = :nome";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':nome',$nome);
		$result->execute();

		if($result->rowCount() >0) {
			return true;
		} else {
			return false;
		}
	}

	
}

?>