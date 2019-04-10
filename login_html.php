
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login CodeBooks</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="shortcut icon" href="images/favicon.png">


    <script>
    function validaLogin () {
        var usuario = document.getElementById('usuario').value;
        var senha = document.getElementById('senha').value;



        if(usuario =="") {

            alert('Para realizar o login por favor preencha os campos, \n\n-Ou se preferir entre sem cadastro prévio \n\n -Ou cadastre-se e aproveite');
        } else if (senha =="") {

            alert("Por favor preencha o campo senha");
         } else if (usuario = true && senha = truw)  {

            alert('Seja Bem Vindo a CodeBooks Prezado '+usuario);
         }
         
     }

        function validaSemCadastro () {

        alert('Seja Bem vindo a CodeBooks Prezado Visitante(a)')

        }
    </script>
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Login</h3>
                    <h3 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank">Code Books</a></h3>
                    <?php
                            if(isset($_SESSION['nao_autenticado'])):

                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    unset($_SESSION['nao_autenticado']);
                endif;
                    ?>
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" id="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" id="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button name="logar" id="logar" class="button is-block is-link is-large is-fullwidth" onclick="validaLogin();">Entrar</button>
                            <br>
                                <button name="entrar_sem_cadastro" id="entrar_sem_cadastro" class="button is-block is-link is-large is-fullwidth" onclick="validaSemCadastro()">Entrar Sem Cadastro</button>
                                <br>
                                    <button name="cadastre_se" id="cadastre_se" class="button is-block is-link is-large is-fullwidth">Cadastre-se</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
       <script src="js/main.js"></script>
</body>

</html>