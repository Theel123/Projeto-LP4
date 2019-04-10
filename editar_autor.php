<?php
 require('crud_autor_class.php');
 $autor = new Autor();


if(isset($_POST['id_autor'])) {

	$nomeAutor = $_POST['nome_autor'];
	$sobrenomeAutor = $_POST['sobrenome_autor'];
	$idAutor = $_POST['id_autor'];


    $autor->editar($nomeAutor,$sobrenomeAutor, $idAutor);
	header('Location: cadastro_autorC.php');
} 


?>