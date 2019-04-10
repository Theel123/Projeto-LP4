<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Fale Conosco</title>
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
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="index.html"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li><a href="index.html">INICIO</a></li>
                        <li><a href="about-us.html">SOBRE NÓS</a></li>
                        <li><a href="services.html">SERVIÇOS</a></li>
                        <li><a href="portfolio.html">ACERVO</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">MAIS <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="404.html">Error 404</a></li>
                                <li><a href="privacy.html">Politica de privacidade</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="contact-us.html">CONTATOS</a></li>
                    </ul>        
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->
    <section id="contact-page" class="container">
        <div class="row-fluid">
            <div class="span8">
                <h4>Formulario para cadastro de Editora: </h4>
                <div class="status alert alert-success" style="display: none"></div>
                <form  id="formulario_editora" class="contact-form" name="contact-form" method="post" action="grava_editora.php">
                    <div class="row-fluid">
                        <div class="span5">
                            <label>Nome completo: </label>
                            <input type="text" class="input-block-level" required="required" placeholder="Nome da Editora" id="nome_editora" name="nome_editora">
                            <label>CPNJ</label>
                            <input type="text" class="input-block-level" required="required" placeholder="CNPJ" id="cnpj_editora" name="cnpj_editora">
                            </div>
                    </div>
                    <button class="btn btn-primary btn-large pull-left" id="botao" onclick="cadastroFeito();">Cadastrar</button>
                </form>
            </div>
            <div class="span3">
                <div style="height:60px"></div>
                <h4>CADASTRE AS EDITORAS QUE SÃO FILIADAS AO NOSSO SISTEMA</h4>
                <p>Segue nossas informações para caso de erros neste cadastro</p>
                <p>
                    <i class="icon-map-marker pull-left"></i>Rua Claudio José Nunes<br>
                    São Paulo, Brasil
                </p>
                <p>
                    <i class="icon-envelope"></i> &nbsp;<a href="mailto:company@domain.com">codebooks@hotmail.com</a>
                </p>
                <p>
                    <i class="icon-phone"></i> &nbsp;(11)9-8585-7276
                </p>
                <p>
                    <i class="icon-globe"></i> &nbsp;<a href="http://www.domain.com">www.codebooks.com</a>
                </p>
            </div>
        </div>
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
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>                   
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
