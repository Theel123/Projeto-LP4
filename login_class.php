<?php

Class Login {

	private $conexao;

	public function __construct() {
		$this->conexao = new PDO("mysql:host=localhost;dbname=biblioteca","root","");
	}


	public function verificaLogin($nome,$senha){

		$sql = "SELECT * FROM biblioteca.cliente WHERE cliente_nome = :nome AND senha = :senha";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':nome',$nome);
		$result->bindValue(":senha",$senha);
		$result->execute();

		if($result->rowCount() > 0) {

			$_SESSION['usuario'] = $usuario;
			header('Location: index.html');

			} else {
	
				header('Location: login_html.php');
			$_SESSION['nao_autenticado'] = true;
		
			}

		}

	}

?>