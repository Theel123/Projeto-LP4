<?php
 require('crud_editora_class.php');
 $editora = new Editora();

  if (!empty($_GET['id_editora'])) {


 	$id = $_GET['id_editora'];
 	$editora->excluir($id);

 	header('Location: cadastro_editoraC.php');
 } else {
 	
 	header('Location index.html');
 }



if(isset($_POST['nome_editora'])) {

	$nomeEditora = $_POST['nome_editora'];
	$cnpjEditora = $_POST['cnpj_editora'];


    $editora->adicionar($nomeEditora, $cnpjEditora);
	header('Location: cadastro_editoraC.php');
} 


?>