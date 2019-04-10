<?php
session_start();

require('login_class.php');
require('crud_livro_class.php');
$login = new Login();


if(isset($_POST['logar'])) {

	if (empty($_POST['usuario']))  {

		header('Location: login_html.php');
		exit();	
 		} else if (empty($_POST['senha']))  {

			header('Location: login_html.php');
			exit();
		}

$usuario = addslashes($_POST['usuario']);
$senha = md5(addslashes($_POST['senha']));

$autentica = $login->verificaLogin($usuario,$senha); 


}

else if(isset($_POST['entrar_sem_cadastro'])) {

	header('Location: index.html');
}

else if(isset($_POST['cadastre_se'])) {

	header('Location: cadastro_clienteIndex.php');


}

?>