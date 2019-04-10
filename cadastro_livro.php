<?php
 require('crud_livro_class.php');
 $livro = new Livro();

  if (!empty($_GET['id_livro'])) {


 	$id = $_GET['id_livro'];
 	$livro->excluir($id);

 	header('Location: cadastro_livroC.php');
 } else {
 	
 	header('Location index.html');
 }



if(isset($_POST['titulo'])) {

	$categoria = $_POST['categorias'];
	$editora = $_POST['editoras'];
	$ano = $_POST['ano'];
	$idioma = $_POST['idioma'];
	$paginas = $_POST['paginas'];
	$tituloLivro = $_POST['titulo'];
	$autor = $_POST['autores'];
	
    $livro->adicionar($categoria,$editora,$ano,$idioma,$paginas,$tituloLivro,$autor);
	header('Location: cadastro_livroC.php');
} 


?>