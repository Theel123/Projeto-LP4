<?php
try {
		$conexao = new PDO("mysql:host=localhost;dbname=biblioteca","root",""); 
		


}
	catch (PDOException $e){
		
			print"Erro com releção ao banco de dados, verifique a conexao por favor";

}


?>