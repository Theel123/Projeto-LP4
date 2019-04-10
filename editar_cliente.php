<?php
 require('crud_cliente_class.php');
 $cliente = new Cliente();

if(isset($_POST['id_cliente'])) {
 

  $cidades       =  $_POST['cidades'];
  $endereco      =  $_POST['enderecos'];
  $bairros     =  $_POST['bairros'];
  $nomeCliente   =  $_POST['nome_cliente'];
  $rg          =  $_POST['rg'];
  $cpf         =  $_POST['cpf'];
  $telefone      =  $_POST['telefone'];
  $email       =  $_POST['email'];
  $celular     =  $_POST['celular'];
  $sexo =       $_POST['groupOfDefaultRadios'];
  $numero          = $_POST['numero'];
  $complemento   =  $_POST['complemento'];
  $senha = md5($_POST['senha']);  
  $idCliente = $_POST['id_cliente'];


  $cliente->editar($cidades,$endereco,$bairros,$nomeCliente,$rg,$cpf,$telefone,$email,$celular,$sexo,$numero,$complemento,$senha,$idCliente);

  header('Location: cadastro_clienteC.php');
} 


?>