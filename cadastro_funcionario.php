<?php
 require('crud_funcionario_class.php');
 $funcionario = new Funcionario();
 

  if (!empty($_GET['id_funcionario'])) {


 	$id = $_GET['id_funcionario'];
 
	$bairro 		 =  $_POST['bairros'];
	$cidade  		 =  $_POST['cidades'];
	$endereco  		 =  $_POST['enderecos'];
	$nome 	         =  $_POST['nome_funcionario'];
	$cpf     		 =  $_POST['cpf'];
	$rg      		 =  $_POST['rg'];
	$nascimento      =  $_POST['dataNascimento'];
	$civil           =  $_POST['estadoCivil'];
	$sexo            =  $_POST['groupOfDefaultRadios'];
	$email   		 =  $_POST['email'];
	$telefone 		 =  $_POST['telefone'];
	$celular 		 =  $_POST['celular'];
	$numero          =  $_POST['numero'];
	$cargo           =  $_POST['cargo'];
	$admissao        =  $_POST['dataAdmissao'];
	$complemento 	 =  $_POST['complemento'];
	$filhos          =  $_POST['filhos'];
	$idFuncionario = $_POST['id_funcionario'];

 
	$funcionario->adicionar($bairro,$cidade,$endereco,$nome,$cpf,$rg,$nascimento,$civil,$sexo,$email,$telefone,
		$celular,$numero,$admissao,$complemento,$cargo,$filhos,$idFuncionario);
	header('Location: cadastro_funcionarioC.php');
} 


?>