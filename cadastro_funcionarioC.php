
<?php
 require('crud_funcionario_class.php');
$funcionario = new Funcionario();

if(!empty($_GET['id'])){

    $id = $_GET['id'];
    $info = $funcionario->getInfo($id);
} 

?>
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Cadastro  Funcionario</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
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
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="index.html"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="about-us.html">Sobre Nós</a></li>
                        <li><a href="services.html">Serviços</a></li>
                        <li><a href="portfolio.html">Acervo</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros <i class="icon-angle-down"></i></a>
                           <ul class="dropdown-menu">
                                <li><a href="cadastro_autorC.php">Cadastro Autor</a></li>
                                <li><a href="cadastro_clienteC.php">Cadastro Cliente</a></li>
                                <li><a href="cadastro_editoraC.php">Cadastro Editora</a></li>
                                <li><a href="cadastro_livroC.php">Cadastro Livro</a></li>
                                <li><a href="cadastro_funcionarioC.php">Cadastro Funcionario</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contatos</a></li>
                    </ul>        
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- /header -->

 

    <section id="contact-page" class="container">
        <div class="row-fluid">
            <div class="span8">
                <h4>Formulario para cadastro de Funcionario</h4>
                <div class="status alert alert-success" style="display: none"></div>
                    <div class="row-fluid">
                     
                         <form  name="formulario_funcionario" method="post" action="cadastro_funcionario.php" onsubmit="return valida_form_funcionario();">
                    <div class="row-fluid">
                        <div class="span5">
                            <label><b> Nome: *</b></label>
                            <input type="text" class="input-block-level"  placeholder="Nome Funcionario..."" id="nome_funcionario" name="nome_funcionario">
                            <label><b> RG: </b></label>
                            <input type="text" class="input-block-level" placeholder="RG ..." id="rg" name="rg">
                              <label><b>CPF: *</b></label>
                            <input type="text" class="input-block-level" placeholder="CPF ..." id="cpf" name="cpf">
                            <label><b>Data de Nascimento: *</b></label>
                                <input id="dataNascimento" name="dataNascimento" type="date">
                              <label><b>Email: *</b></label>
                            <input type="text" class="input-block-level" placeholder="Email ..." id="email" name="email">
                              <label><b>Telefone: *</b></label>
                            <input type="text" class="input-block-level" placeholder="Telefone ..." id="telefone" name="telefone">
                              <label>Celular: </label>
                            <input type="text" class="input-block-level" placeholder="Celular ..." id="celular" name="celular">
                                     <label>Cargo: *</label>
                            <input type="text" class="input-block-level" placeholder="Numero..." id="cargo" name="cargo">
                              <label>Quantidade de Filhos: </label>
                                  <select name="filhos"  id="filhos">
                                    <option>Quanntidade de Filhos</option>
                                    <option value=1> 1</option>
                                   <option value=2> 2</option>
                                    <option value=3> 3</option>
                                     <option value=4> 4</option>
                                      <option value=5> 5</option>
                                       <option value=6> 6</option>

                                      </select>
                                <label>Estado Civil: </label>
                                  <select name="estadoCivil" id="estadoCivil">
                                    <option>Escolha um Estado Civil</option>
                                    <option value=1> Solteiro</option>
                                   <option value=2> Divorciado</option>
                                    <option value=3> Casado</option>
                                      </select>

                                        <label><b>Data de Admissão: *</b></label>
                                <input  name= "dataAdmissao" id="dataAdmissao" type="date">
                              <label>Sexo: </label>
                              <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" value=1>
                              <label class="custom-control-label" for="defaultGroupExample1">Masculino</label>
                              </div>

                                <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="mascu" name="groupOfDefaultRadios" value=0>
                                <label class="custom-control-label" for="defaultGroupExample3">Feminino</label>
                                </div>

                                <label>Cidades: *</label>

                                <select name="cidades" id="cidades">
                                 <option>Selecione uma Cidade</option>

                                        <?php

                                           $lista =  $funcionario->arrayCidades();
                                           foreach ($lista as $item):?>
                                           <option value=<?php print $item['id_cidade'];?> ><?php print $item['cidade_nome'];?></option>
                                     <?php endforeach;?>
                                            </select>

                               
                                <label>Endereço: *</label>

                                <select name="enderecos" id="enderecos">
                                 <option>Selecione um Endereço</option>

                                        <?php

                                           $lista =  $funcionario->arrayEnderecos();
                                           foreach ($lista as $item):?>
                                           <option value=<?php print $item['id_endereco'];?> ><?php print $item['endereco_logradouro'];?></option>
                                     <?php endforeach;?>
                                            </select>
                                <label>Bairros: *</label>
                             
                                
                                            
                                            <select name="bairros" id="bairro">
                                            <option>Selecione  um Bairro</option>

                                        <?php

                                           $lista =  $funcionario->arrayBairros();
                                           foreach ($lista as $item):?>
                                           <option value=<?php print $item['id_bairro'];?>><?php print $item['bairro_nome'];?></option>
                                     <?php endforeach;?>
                                   
                                            </select>

                   
                            <label>Numero: *</label>
                            <input type="text" class="input-block-level" placeholder="Numero..." id="numero" name="numero">
                            <label>Complemento: *</label>
                            <input type="text" class="input-block-level" placeholder="Complemento..." id="complemento" name="complemento">
                                                
                          
                        </div>
                      
                    </div>
                    <br>
                    <button id="cadastrar_funcionario" name="cadastrar_funcionario" class="btn btn-primary btn-large pull-left" >Cadastrar Funcionario</button>
                    

                </form>
<br>
            </div>
            <br>
            <h2>Relação de Funcionarios</h2>
            <table class="table">
  <thead>
    <tr>

      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">CPF</th>
      <th scope="col">RG</th>
      <th scope="col">EMAIL</th>
      <th scope="col">NASC</th>
      <th scope="col">TELEFONE</th>
      <th scope="col">CEL</th>
      <th scope="col">SEXO</th>
      <th scope="col">CIVIL</th>
      <th scope="col">CITY</th>
      <th scope="col">END</th>
      <th scope="col">BAIRRO</th>
      <th scope="col">NUMERO</th>
      <th scope="col">COMP</th>
      <th scope="col">ADMISSAO</th>
      <th scope="col">CARGO</th>
      <th scope="col">FILHOS</th>
      <th scope="col">AÇÕES</th>


    </tr>
  </thead>
  <tbody>
<?php
$lista = $funcionario->getAll(); 

foreach ($lista as $item):
?> 
<tr>
     <td><?php print $item['id_funcionario']?> </td>
     <td><?php print $item['funcionario_nome']?></td>
     <td><?php print $item['funcionario_cpf']?> </td>
     <td><?php print $item['funcionario_rg']?> </td>
     <td><?php print $item['funcionario_email']?> </td>
     <td><?php print $item['funcionario_date_nascimento']?> </td>
     <td><?php print $item['funcionario_telefone']?> </td>
     <td><?php print $item['funcionario_celular']?> </td>
     <td><?php print $item['funcionario_sexo']?> </td>
     <td><?php print $item['funcionario_estadcivil']?> </td>
     <td><?php print $item['cidade_nome']?> </td>
     <td><?php print $item['endereco_logradouro']?> </td>
     <td><?php print $item['bairro_nome']?> </td>
     <td><?php print $item['funcionario_numero']?> </td>
     <td><?php print $item['funcionario_complemento']?> </td>
     <td><?php print $item['funcionario_date_admissao']?> </td>
     <td><?php print $item['funcionario_cargo']?> </td>
     <td><?php print $item['qtd_filhos']?> </td>

     <td> 
            <a href="editar_funcionarioC.php?id_funcionario=<?php print $item['id_funcionario']; ?>">[EDITAR]</a>
            <a href="cadastro_funcionario.php?id_funcionario=<?php print $item['id_funcionario']; ?>">[DELETAR]</a>
    </td>

</tr>
<?php endforeach; ?>



      </td>
    </tr>
  </tbody>
</table>
           
    </section>

     <!--Bottom-->
     <section id="bottom" class="main">
        <!--Container-->
        <div class="container">
            <!--row-fluids-->
            <div class="row-fluid">
                <!--Contact Info-->
                <div class="span3">
                    <h4>CONTATOS</h4>
                    <ul class="unstyled address">
                        <li>
                            <i class="icon-home"></i><strong>Endereço</strong> Rua Claudio José Nunes<br>São Paulo,Brasil
                        </li>
                        <li>
                            <i class="icon-envelope"></i>
                            <strong>Email: </strong> <a href="mailto:company@domain.com">codebooks@hotmail.com</a>
                        </li>
                        <li>
                            <i class="icon-globe"></i>
                            <strong>Site:</strong> <a href="http://www.domain.com">www.codebooks.com</a>
                        </li>
                        <li>
                            <i class="icon-phone"></i>
                            <strong>Telefone:</strong> (11)9-8585-7276
                        </li>
                    </ul>
                </div>
                <!--End Contact Info-->
                <!--Important Links-->
                <div id="tweets" class="span3">
                    <h4>CODE BOOKS</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="about-us.html">Sobre Nós</a></li>
                            <li><a href="services.html">Serviços</a></li>
                            <li><a href="portfolio.html">Acervo</a></li>
                           <li><a href="contatc-us.html">Contatos</a></li>
                        
                        </ul>
                    </div>  
                </div>
                <!--Important Links-->
                <div id="archives" class="span2">
                    <h4>CADASTROS</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="cadastro_autorC.php">Cadastro Autor</a></li>
                            <li><a href="cadastro_livroC.php">Cadastro Cliente</a></li>
                            <li><a href="cadastro_editoraC.php">Cadastro Editora</a></li>
                            <li><a href="cadastro_funcionarioC.php">Cadastro Funcionario</a></li>
                            <li><a href="cadastro_livroC.php">Cadastro Livro</a></li>

                        </ul>
                    </div>
                </div>
                <!--End Links-->
                <div class="span4">
                    <h4>FACEBOOK</h4>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=130&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
            </div>
            <!--/row-fluid-->
        </div>
        <!--/container-->
    </section>
    <!--/bottom-->
        <!--Footer-->
    <footer id="footer">
        <div class="container">
            <div class="row-fluid">
                <div class="span5 cp">
                    &copy; 2019 <a target="_blank" href="http://www.domain.com/">CodeBooks</a>. Todos os direitos reservados.
                </div>
                <div class="span6">
                           <ul class="social pull-right">
                        <li><a href="https://www.facebook.com/Matheus.Only"><i class="icon-facebook"></i></a></li>
                        <li><a href="https://twitter.com/login?lang=pt"><i class="icon-twitter"></i></a></li>
                        <li><a href="https://br.pinterest.com/"><i class="icon-pinterest"></i></a></li>
                        <li><a href="https://br.linkedin.com/"><i class="icon-linkedin"></i></a></li>
                        <li><a href="https://plus.google.com/discover?hl=pt_br"><i class="icon-google-plus"></i></a></li>                       
                        <li><a href="https://www.youtube.com/"><i class="icon-youtube"></i></a></li>
                        <li><a href="https://www.instagram.com/?hl=pt-br"><i class="icon-instagram"></i></a></li>                   
                    </ul>
                </div>
                <div class="span1">
                    <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--/Footer-->
    <script src="js/vendor/jquery-1.9.1.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
</body>
</html>