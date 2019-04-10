 <?php require('crud_livro_class.php'); 
 $livro = new Livro();
  if(!empty($_GET['id'])){
    $id = $_GET['id']; 
    $info = $livro->getInfo($id); } ?> 
    <!DOCTYPE html> <!--[if gt IE 8]><!-->
     <html class="no-js"> <!--<![endif]--> <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Cadastro  Livros</title> <meta name="description" content="">
         <meta name="keywords" content=""> <meta name="viewport" content="width=device-width"> 
         <link rel="stylesheet" href="css/bootstrap.min.css"> <link rel="stylesheet" href="css/bootstrap-responsive.min.css"> 
         <link rel="stylesheet" href="css/font-awesome.min.css"> <link rel="stylesheet" href="css/main.css"> 
         <link rel="stylesheet" href="css/sl-slide.css">
          <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
           <link rel="shortcut icon" href="images/favicon.png"> 
       </head> 
       <body> 
        <!--Header-->
         <header class="navbar navbar-fixed-top"> 
            <div class="navbar-inner"> 
                <div class="container_header"> 
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> </a> 
                        <a id="logo" class="pull-left" href="index.html"></a>
                         <div class="nav-collapse collapse pull-right">
                          <ul class="nav"> <li><a href="index.html">Inicio</a></li> 
                            <li><a href="about-us.html">Sobre Nós</a></li> 
                            <li><a href="services.html">Serviços</a></li> 
                            <li><a href="portfolio.html">Acervo</a></li> 
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros <i class="icon-angle-down"></i></a> 
                                <ul class="dropdown-menu"> <li><a href="cadastro_autorC.php">Cadastro Autor</a></li>
                                 <li><a href="cadastro_clienteC.php">Cadastro Cliente</a></li> 
                                 <li><a href="cadastro_editoraC.php">Cadastro Editora</a></li> <li><a href="cadastro_livroC.php">Cadastro Livro</a></li> 
                                 <li><a href="cadastro_funcionarioC.php">Cadastro Funcionario</a></li> </ul> </li>
                                  <li><a href="contact-us.html">Contatos</a></li>
                                  </ul> </div> </div> </div> 
                              </header>
                                   <!-- /header --> <!-- /header -->
                                    <section id="contact-page" class="container"> <div class="row-fluid"> <div class="span8">
                                     <h4>Formulario para cadastro de livros</h4> 
                                     <div class="status alert alert-success" style="display: none"></div> <div class="row-fluid">
                                      <form  name="formulario_livro" method="post" action="cadastro_livro.php"  onsubmit="return valida_form_livro();">
                                       <div class="row-fluid"> <div class="span5">

                                            <label>Editoras: </label>
                                            <select name="editoras" id="editoras">
                                            <option>Selecione  uma Editora</option>

                                        <?php

                                           $lista =  $livro->arrayEditoras();

                                           foreach ($lista as $item):?>

                                           <option value=<?php print $item['id_editora'];?> ><?php print $item['editora_nome'];?></option>
                                     <?php endforeach;?>
                                            </select>

                                            <label>Categorias: </label> 
                                            <select name="categorias" id="categorias">
                                            <option>Selecione  uma Categoria</option>

                                        <?php
                                            $lista =  $livro->arrayCategorias();

                                            foreach ($lista as $item):?>
                                            <option value=<?php print $item['id_categoria'];?> ><?php print $item['categoria_nome'];?></option>
                                        <?php endforeach;?>
                                            </select>

                                              <label>Ano: </label> 
                                              <input type="text" class="input-block-level" placeholder="Ano..." id="ano" name="ano">
                                              <label>Idioma: </label>
                                              <input type="text" class="input-block-level" placeholder="Idioma..." id="idioma" name="idioma"> 
                                              <label>Paginas: </label> 
                                              <input type="text" class="input-block-level" placeholder="Paginas..." id="paginas" name="paginas"> 
                                              <label>Titulo: </label> 
                                              <input type="text" class="input-block-level" placeholder="Titulo..." id="titulo" name="titulo">     

                                              <label>Autores: </label> 
                                              <select name="autores" id="autores">
                                              <option>Selecione  um Autor</option>

                                        <?php
                                           $lista =  $livro->arrayAutores();

                                           foreach ($lista as $item):?>
                                           <option value= <?php print $item['id_autor'];?> ><?php print $item['autor_nome'];?></option>

                                        <?php endforeach;?>
                                             </select>

                                                 </div>
                                                 </div> 
                                                 <br>
                                                  <button id="cadastro_livro" name="cadastro_livro" class="btn btn-primary btn-large pull-left" >Cadastrar Livro</button> 
                                              </form> <br> </div> <br>
                                               <h2>Relação de Livros</h2>
                                                <table class="table">
                                                 <thead> 
                                                  <th scope="col">ID</th>
                                                   <th scope="col">Editora</th> 
                                                   <th scope="col">Categoria</th>
                                                    <th scope="col">Ano</th>
                                                     <th scope="col">Idioma</th> 
                                                     <th scope="col">Paginas</th>
                                                      <th scope="col">Titulo</th> 
                                                      <th scope="col">Autor</th> </tr>
                                                    </thead>

                                                     <tbody> 
                                                      <?php $lista = $livro->getAll();
                                                       foreach ($lista as $item): ?> <tr>
                                                        <td><?php print $item['id_livro']?> </td> 
                                                        <td><?php print $item['editora_nome']?></td> 
                                                        <td><?php print $item['categoria_nome']?> </td>
                                                         <td><?php print $item['livro_ano']?> </td> 
                                                         <td><?php print $item['livro_idioma']?> </td>
                                                          <td><?php print $item['livro_paginas']?> </td> 
                                                          <td><?php print $item['livro_titulo']?> </td> 
                                                          <td><?php print $item['autor_nome']?> </td>
                                                           <td> <a href="editar_livroC.php?id_livro=<?php print $item['id_livro']; ?>">[EDITAR]</a> <a href="cadastro_livro.php?id_livro=<?php print $item['id_livro']; ?>">[DELETAR]</a> </td> </tr> <?php endforeach; ?> </td> </tr> </tbody> </table> </section> d <!--Bottom--> <section id="bottom" class="main"> <!--Container--> <div class="container"> <!--row-fluids--> <div class="row-fluid"> <!--Contact Info--> <div class="span3"> <h4>CONTATOS</h4> <ul class="unstyled address"> <li> <i class="icon-home"></i><strong>Endereço</strong> Rua Claudio José Nunes<br>São Paulo,Brasil </li> <li> <i class="icon-envelope"></i> <strong>Email: </strong> <a href="mailto:company@domain.com">codebooks@hotmail.com</a> </li> <li> <i class="icon-globe"></i> <strong>Site:</strong> <a href="http://www.domain.com">www.codebooks.com</a> </li> <li> <i class="icon-phone"></i> <strong>Telefone:</strong> (11)9-8585-7276 </li> </ul> </div> <!--End Contact Info--> <!--Important Links--> <div id="tweets" class="span3"> <h4>CODE BOOKS</h4> <div> <ul class="arrow"> <li><a href="about-us.html">Sobre Nós</a></li> <li><a href="services.html">Serviços</a></li> <li><a href="portfolio.html">Acervo</a></li> <li><a href="contatc-us.html">Contatos</a></li> </ul> </div> </div> <!--Important Links--> <div id="archives" class="span2"> <h4>CADASTROS</h4> <div> <ul class="arrow"> <li><a href="cadastro_autorC.php">Cadastro Autor</a></li> <li><a href="cadastro_livroC.php">Cadastro Cliente</a></li> <li><a href="cadastro_editoraC.php">Cadastro Editora</a></li> <li><a href="cadastro_funcionarioC.php">Cadastro Funcionario</a></li> <li><a href="cadastro_livroC.php">Cadastro Livro</a></li> </ul> </div> </div> <!--End Links--> <div class="span4"> <h4>FACEBOOK</h4> <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=130&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> </div> </div> <!--/row-fluid--> </div> <!--/container--> </section> <!--/bottom--> <!--Footer--> <footer id="footer"> <div class="container"> <div class="row-fluid"> <div class="span5 cp"> &copy; 2019 <a target="_blank" href="http://www.domain.com/">CodeBooks</a>. Todos os direitos reservados. </div> <div class="span6"> <ul class="social pull-right"> <li><a href="https://www.facebook.com/Matheus.Only"><i class="icon-facebook"></i></a></li> <li><a href="https://twitter.com/login?lang=pt"><i class="icon-twitter"></i></a></li> <li><a href="https://br.pinterest.com/"><i class="icon-pinterest"></i></a></li> <li><a href="https://br.linkedin.com/"><i class="icon-linkedin"></i></a></li> <li><a href="https://plus.google.com/discover?hl=pt_br"><i class="icon-google-plus"></i></a></li> <li><a href="https://www.youtube.com/"><i class="icon-youtube"></i></a></li> <li><a href="https://www.instagram.com/?hl=pt-br"><i class="icon-instagram"></i></a></li> </ul> </div> <div class="span1"> <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a> </div> </div> </div> </footer> <!--/Footer--> <script src="js/vendor/jquery-1.9.1.min.js"></script> <script src="js/vendor/bootstrap.min.js"></script> <script src="js/main.js"></script> <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> </body> </html>