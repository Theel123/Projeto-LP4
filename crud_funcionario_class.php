<?php

Class Funcionario {

	private $conexao;

	public function __construct() {
		$this->conexao = new PDO("mysql:host=localhost;dbname=biblioteca","root","");
	}


	public function adicionar($bairro,$cidade,$endereco,$nome,$cpf,$rg,$nascimento,$civil,$sexo,$email,$telefone,
		$celular,$numero,$admissao,$complementpo,$cargo,$filhos){

		if($this->existeNome($nome) == false){
$sql = "INSERT INTO biblioteca.funcionario
 (id_fk_bairro,  
id_fk_cidade, 
id_fk_endereco,  
funcionario_nome, 
funcionario_cpf, 
funcionario_rg, 
funcionario_date_nascimento,
funcionario_estadcivil, 
funcionario_sexo, 
funcionario_email, 
funcionario_telefone,
funcionario_celular,  
funcionario_numero,
funcionario_date_admissao, 
funcionario_complemento,
funcionario_cargo,
qtd_filhos)
 VALUES 
 (
:bairro,
:cidade,
:endereco,
:nome,
:cpf,
:rg,
:nascimento,
:civil,
:sexo,
:email,
:telefone,
:celular,
:numero,
:admissao,
:complemento,
:cargo,
:filhos

	)";
 	$result = $this->conexao->prepare($sql);

	$result->bindValue(':cidade', $cidade);
	$result->bindValue(':endereco', $endereco);
	$result->bindValue(':bairro', $bairro);
	$result->bindValue(':nome', $nome);
	$result->bindValue(':cpf', $cpf);
	$result->bindValue(':rg', $rg);
	$result->bindValue(':nascimento', $nascimento);
	$result->bindValue(':civil', $civel);
	$result->bindValue(':sexo', $sexo);
	$result->bindValue(':email',$email);
	$result->bindValue(':telefone', $telefone);
	$result->bindValue(':celular',$celular);
	$result->bindValue(':numero', $numero);
	$result->bindValue(':admissao', $admissao);
	$result->bindValue(':complemento', $complemento);
	$result->bindValue(':cargo', $cargo);
	$result->bindValue(':filhos', $filhos);

	$result->execute();
	return true;
	

		} else {
			

			return false;
		}
	}

	public function getNome($email) {

		$sql = "SELECT funcionario_nome FROM biblioteca.funcionario WHERE funcionario_email = :email";
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

		$sql = "SELECT * FROM biblioteca.funcionario WHERE id_cliente = :id";
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
		id_funcionario,
		bairro_nome,
		cidade_nome,
		endereco_logradouro,
		funcionario_nome,
		funcionario_cpf,
		funcionario_rg,
		funcionario_date_nascimento,
		funcionario_estadcivil,
		funcionario_sexo,
		funcionario_email,
		funcionario_telefone,
		funcionario_celular,
		funcionario_numero,
		funcionario_date_admissao,
		funcionario_complemento,
		funcionario_cargo,
		qtd_filhos
 FROM biblioteca.funcionario
		INNER JOIN biblioteca.endereco ON (id_fk_endereco = id_endereco)
		INNER JOIN biblioteca.bairro ON (id_fk_bairro = id_bairro)
		INNER JOIN biblioteca.cidade ON (id_fk_cidade = id_cidade)

";
		$result = $this->conexao->query($sql);

		if($result->rowCount()>0) {

			return $result->fetchAll();
		} else {
			return array();
		}
	}

public function editar($bairro,$cidade,$endereco,$nome,$cpf,$rg,$nascimento,$civil,$sexo,$email,$telefone,
    $celular,$numero,$admissao,$complemento,$cargo,$filhos,$idFilhos){

		if($this->existeNome($nome) == false) {
			
			$sql = "UPDATE biblioteca.funcionario
			 SET id_fk_bairro = :bairro,
			 	id_fk_cidade = :cidade,
			 	id_fk_endereco = :endereco,
			 	funcionario_nome = :funcionario,
			 	funcionario_cpf = :cpf,
			 	funcionario_rg = :rg,
			 	funcionario_date_nascimento = :nascimento,
			 	funcionario_estadcivil = :civil,
			 	funcionario_sexo = :sexo,
			 	funcionario_email = :email,
			 	funcionario_telefone = :telefone,
			 	funcionario_celular = :celular,
			 	funcionario_numero = :numero,
			 	funcionario_date_admissao = :admissao,
			 	funcionario_complemento = :complemento,
			 	funcionario_cargo = :cargo,
			 	qtd_filhos = :filhos

			 where id_funcionario = :idFilhos";
			$result = $this->conexao->prepare($sql);
			$result = bindValue(':bairro', $bairro);
			$result = bindValue(':cidade', $cidade);
			$result = bindValue(':endereco', $endereco);
			$result = bindValue(':funcionario', $funcionario);
			$result = bindValue(':cpf', $cpf);
			$result = bindValue(':rg', $rg);
			$result = bindValue(':nascimento', $nascimento);
			$result = bindValue(':civil', $civil);
			$result = bindValue(':sexo', $sexo);
			$result = bindValue(':email', $email);
			$result = bindValue(':telefone', $telefone);
			$result = bindValue(':celular', $celular);
			$result = bindValue(':numero', $numero);
			$result = bindValue(':admissao', $admissao);
			$result = bindValue(':complemento', $complemento);
			$result = bindValue(':cargo', $cargo);
			$result = bindValue(':filhos', $filhos);
			$result->execute();

			return true;
		} else {

			return false;
		}
	}

		public function excluir($id) {
			$sql = "DELETE FROM biblioteca.funcionario WHERE id_funcionario = :id";
			$result = $this->conexao->prepare($sql);
			$result->bindValue(':id', $id);
			$result->execute();
	}


	private function existeNome($nome){

		$sql = "SELECT * FROM biblioteca.funcionario WHERE funcionario_nome = :nome";
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