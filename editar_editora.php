<?php
 require('crud_editora_class.php');
 $editora = new Editora();


if(isset($_POST['id_editora'])) {

	$nomeEditora = $_POST['editora_nome'];
	$cnpj = $_POST['cnpj'];
	$idEditora = $_POST['id_editora'];

    $editora->editar($nomeEditora,$cnpj, $idEditora);
	header('Location: cadastro_editoraC.php');
} 


?>