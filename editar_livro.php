<?php
 require('crud_livro_class.php');
 $livro = new Livro();


if(isset($_POST['id_livro'])) {

	$editoras 	= $_POST['editoras'];
	$categorias = $_POST['categorias'];
	$ano 		= $_POST['ano'];
	$idioma 	= $_POST['idioma'];
	$paginas	= $_POST['paginas'];
	$titulo 	= $_POST['titulo'];
	$autores	= $_POST['autores'];
	$idLivro 	= $_POST['id_livro'];



    $livro->editar($editoras,$categorias,$ano,$idioma,$paginas,$titulo,$autores,$idLivro);
	header('Location: cadastro_livroC.php');
} 


?>