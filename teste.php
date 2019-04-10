<?php
require('crud_livro_class.php');
		$livro = new Livro();



     $lista =  $livro->arrayAutores();


                                                
?>
	<form method="post" action="">
		<select name="uf" id="uf">
		<option value="">Escolha um autor</option>

	<?php
	     $lista =  $livro->arrayAutores();

	 foreach ($lista as $item):?>
	<option value="<?php print $item['id_autor'];?>"><?php print $item['autor_nome'];?></option>
 </select>

 <input type="submit">

 <?php print($item['id_autor']);?>
 <?php endforeach;?>
</form>
