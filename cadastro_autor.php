<?php
 require('crud_autor_class.php');
 $autor = new Autor();

  if (!empty($_GET['id_autor'])) {


 	$id = $_GET['id_autor'];
 	$autor->excluir($id);

 	header('Location: cadastro_autorC.php');
 } else {
 	
 	header('Location index.html');
 }



if(isset($_POST['nome_autor'])) {

	$nomeAutor = $_POST['nome_autor'];
	$sobrenomeAutor = $_POST['sobrenome_autor'];


    $autor->adicionar($nomeAutor, $sobrenomeAutor);
	header('Location: cadastro_autorC.php');
} 


?>