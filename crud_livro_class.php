<?php

Class Livro {

	private $conexao;

	public function __construct() {
		$this->conexao = new PDO("mysql:host=localhost;dbname=biblioteca","root","");
	}


	public function adicionar($categoria,$editora,$ano,$idioma,$paginas,$titulo,$autor){

		if($this->existeNome($nome) == false){

	$sql    = "INSERT INTO biblioteca.livro (id_fk_categoria,id_fk_editora,livro_ano,livro_idioma,livro_paginas,livro_titulo,id_fk_autor) VALUES (:categoria,:editora,:ano,:idioma,:paginas,:titulo,:autor)";
	$result = $this->conexao->prepare($sql);
	$result->bindValue(':categoria', $categoria);
	$result->bindValue(':editora', $editora);
	$result->bindValue(':ano', $ano);
	$result->bindValue(':idioma', $idioma);
	$result->bindValue(':paginas', $paginas);
	$result->bindValue(':titulo', $titulo);
	$result->bindValue(':autor', $autor);
	$result->execute();
	return true;

		} else {

			return false;
		}
	}

	public function getNome($idioma) {

		$sql = "SELECT livro_titulo FROM biblioteca.livro WHERE livro_idioma = :idioma";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':idioma', $idioma);
		$result->execute();

		if($result->rowCount()>0) {

			$info = $result->fetch();

			return $info['livro_titulo'];
		} else {
			return'';
		}
	}


	public function getInfo ($id) {

		$sql = "SELECT * FROM biblioteca.livro WHERE id_livro = :id";
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

		$sql = "SELECT 
				id_livro, 
				categoria_nome,
				editora_nome,
				livro_ano,
				livro_idioma,
				livro_paginas,
				livro_titulo,
				autor_nome
				FROM biblioteca.livro
				INNER JOIN biblioteca.editora ON (id_fk_editora = id_editora)
				INNER JOIN biblioteca.categoria ON (id_fk_categoria = id_categoria)
				INNER JOIN biblioteca.autor ON (id_fk_autor = id_autor)
			";
		$result = $this->conexao->query($sql);

		if($result->rowCount()>0) {

			return $result->fetchAll();
		} else {
			return array();
		}
	}

public function editar($editoras,$categorias,$ano,$idioma,$paginas,$titulo,$autores,$id){

		if($this->existeNome($nome)== false) {
			
			$sql = "UPDATE biblioteca.livro 
			  SET id_fk_editora = :editoras,
			  id_fk_categoria = :categorias,
			  livro_ano = :ano,
			  livro_idioma = :idioma,
			  livro_paginas = :paginas, 
			  livro_titulo = :titulo, 
			  id_fk_autor = :autores
			    WHERE id_livro = :id";
			$result = $this->conexao->prepare($sql);
			$result->bindValue(':editoras', $editoras);
			$result->bindValue(':categorias', $categorias);
			$result->bindValue(':ano', $ano);
			$result->bindValue(':idioma', $idioma);
			$result->bindValue(':paginas', $paginas);
			$result->bindValue(':titulo', $titulo);
			$result->bindValue(':autores', $autores);
			$result->bindValue(':id', $id);
			$result->execute();

			return true;
		} else {

			return false;
		}
	}

		public function excluir($id) {
			$sql = "DELETE FROM biblioteca.livro WHERE id_livro = :id";
			$result = $this->conexao->prepare($sql);
			$result->bindValue(':id', $id);
			$result->execute();
	}


	private function existeNome($nome){

		$sql = "SELECT * FROM biblioteca.livro WHERE livro_titulo = :nome";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':nome',$nome);
		$result->execute();

		if($result->rowCount() >0) {
			return true;
		} else {
			return false;
		}
	}

	public function arrayAutores () {


			$sql = " SELECT autor_nome,id_autor FROM biblioteca.autor ";
			$result = $this->conexao->prepare($sql);
			$result->execute();

				if($result->rowCount()>0) {

			return $result->fetchAll();
		} else {
			return array();
		}


	}

		public function arrayEditoras () {


			$sql = " SELECT editora_nome,id_editora FROM biblioteca.editora ";
			$result = $this->conexao->prepare($sql);
			$result->execute();

				if($result->rowCount()>0) {

			return $result->fetchAll();
		} else {
			return array();
		}


	}


		public function arrayCategorias () {


			$sql = " SELECT categoria_nome,id_categoria FROM biblioteca.categoria ";
			$result = $this->conexao->prepare($sql);
			$result->execute();

				if($result->rowCount()>0) {

			return $result->fetchAll();
		} else {
			return array();
		}


	}


	
}

?>