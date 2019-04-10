<?php
 require('crud_cliente_class.php');
 $cliente = new Cliente();
 

  if (!empty($_GET['id_cliente'])) {


 	$id = $_GET['id_cliente'];
 	$cliente->excluir($id);

 	header('Location: cadastro_clienteC.php');
 } else {
 	
 	header('Location index.html');
 }



if(isset($_POST['cadastrar_cliente'])) {
	
	

	$cidades  		 =  $_POST['cidades'];
	$endereco  		 =  $_POST['enderecos'];
	$bairros 		 =  $_POST['bairros'];
	$nomeCliente 	 =  $_POST['nome_cliente'];
	$rg      		 =  $_POST['rg'];
	$cpf     		 =  $_POST['cpf'];
	$telefone 		 =  $_POST['telefone'];
	$email   		 =  $_POST['email'];
	$celular 		 =  $_POST['celular'];
	$sexo = 			$_POST['groupOfDefaultRadios'];
	$numero          = $_POST['numero'];
	$complemento 	 =  $_POST['complemento'];
	$senha = md5($_POST['senha']);	


	$cliente->adicionar($cidades,$endereco,$bairros,$nomeCliente,$rg,$cpf,$telefone,$email,$celular,$sexo,$numero,$complemento,$senha);

	header('Location:  login_html.php');
} 


?>