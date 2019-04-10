<?php

Class Cliente {

	private $conexao;

	public function __construct() {
		$this->conexao = new PDO("mysql:host=localhost;dbname=biblioteca","root","");
	}


	public function adicionar($cidade,$endereco,$bairro,$nome,$rg,$cpf,$telefone,$email,$celular,$sexo,$numero,$complemento,$senha){

		if($this->existeNome($nome) == false){
$sql = "INSERT INTO biblioteca.cliente
 (id_fk_cidade,
 id_fk_endereco,
 id_fk_bairro,
 cliente_nome,
 cliente_rg,
 cliente_cpf,
 cliente_telefone,
 cliente_email,
 cliente_celular,
 cliente_sexo,
 cliente_numero,
 cliente_complemento,
 senha)
 VALUES 
 (
:cidade,
:endereco,
:bairro,
:nome,
:rg,
:cpf,
:telefone,
:email,
:celular,
:sexo,
:numero,
:complemento,
:senha
	)";
 	$result = $this->conexao->prepare($sql);

	$result->bindValue(':cidade', $cidade);
	$result->bindValue(':endereco', $endereco);
	$result->bindValue(':bairro', $bairro);
	$result->bindValue(':nome', $nome);
	$result->bindValue(':rg', $rg);
	$result->bindValue(':cpf', $cpf);
	$result->bindValue(':telefone', $telefone);
	$result->bindValue(':email',$email);
	$result->bindValue(':celular',$celular);
	$result->bindValue(':sexo', $sexo);
	$result->bindValue(':numero', $numero);
	$result->bindValue(':complemento', $complemento);
	$result->bindValue(':senha', $senha);

	$result->execute();
	return true;
	

		} else {
			

			return false;
		}
	}

	public function getNome($email) {

		$sql = "SELECT cliente_nome FROM biblioteca.cliente WHERE cliente_email = :email";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':email', $email);
	$result->execute();

		if($result->rowCount()>0) {

			$info = $result->fetch();

			return $info['cliente_nome'];
		} else {
			return'';
		}
	}


	public function getInfo ($id) {

		$sql = "SELECT * FROM biblioteca.cliente WHERE id_cliente = :id";
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

		$sql = "
			SELECT 
			id_cliente,
		cidade_nome,
		endereco_logradouro,
		bairro_nome,
		cliente_nome,
		cliente_rg,
		cliente_cpf,
		cliente_telefone,
		cliente_email,
		cliente_celular,
		cliente_sexo,
		cliente_numero,
		cliente_complemento,
		
		senha
		 FROM biblioteca.cliente
		INNER JOIN biblioteca.endereco ON (id_fk_endereco = id_endereco)
		INNER JOIN biblioteca.bairro ON (id_fk_bairro = id_bairro)
		INNER JOIN biblioteca.cidade ON (id_fk_cidade = id_cidade)";
		$result = $this->conexao->query($sql);

		if($result->rowCount()>0) {

			return $result->fetchAll();
		} else {
			return array();
		}
	}

public function editar($cidades,$endereco,$bairros,$nomeCliente,$rg,$cpf,$telefone,$email,$celular,$sexo,$numero,$complemento,$senha,$idCliente){

		if($this->existeNome($nome) == false) {
			
			$sql = "UPDATE biblioteca.cliente 
			SET id_fk_cidade = :cidades,
				id_fk_endereco = :endereco,
				id_fk_bairro = :bairros,
				cliente_nome = :nomeCliente,
				cliente_rg = :rg,
				cliente_cpf = :cpf,
				cliente_telefone = :telefone,
				cliente_email = :email,
				cliente_celular = :celular,
				cliente_sexo = :sexo,
				cliente_numero = :numero,
				cliente_complemento = :complemento,
				senha = :senha
		        WHERE id_cliente = :idCliente";
			$result = $this->conexao->prepare($sql);
		    $result->bindValue(':cidades', $cidades);
			$result->bindValue(':endereco', $endereco);
			$result->bindValue(':bairros', $bairros);
			$result->bindValue(':nomeCliente', $nomeCliente);
			$result->bindValue(':rg', $rg);
			$result->bindValue(':cpf', $cpf);
			$result->bindValue(':telefone', $telefone);
			$result->bindValue(':email', $email);
			$result->bindValue(':celular', $celular);
			$result->bindValue(':sexo', $sexo);
			$result->bindValue(':numero', $numero);
			$result->bindValue(':complemento', $complemento);
			$result->bindValue(':senha', $senha);
			$result->bindValue(':idCliente', $idCliente);
			$result->execute();

			return true;
		} else {

			return false;
		}
	}

		public function excluir($id) {
			$sql = "DELETE FROM biblioteca.cliente WHERE id_cliente = :id";
			$result = $this->conexao->prepare($sql);
			$result->bindValue(':id', $id);
			$result->execute();
	}


	private function existeNome($nome){

		$sql = "SELECT * FROM biblioteca.cliente WHERE cliente_nome = :nome";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':nome',$nome);
		$result->execute();

		if($result->rowCount() >0) {
			return true;
		} else {
			return false;
		}
	}

		public function arrayBairros () {


			$sql = " SELECT bairro_nome,id_bairro FROM biblioteca.bairro ORDER BY bairro_nome ";
			$result = $this->conexao->prepare($sql);
			$result->execute();

				if($result->rowCount()>0) {

			return $result->fetchAll();
		} else {
			return array();
		}


	}


		public function arrayCidades () {


			$sql = " SELECT cidade_nome,id_cidade FROM biblioteca.cidade ";
			$result = $this->conexao->prepare($sql);
			$result->execute();

				if($result->rowCount()>0) {

			return $result->fetchAll();
		} else {
			return array();
		}


	}

		public function arrayEnderecos () {


			$sql = " SELECT endereco_logradouro,id_endereco FROM biblioteca.endereco ";
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