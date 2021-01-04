
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
            <!--Primeiro passo recuperar os dados -->
              <!-- action é tido como o caminho que sera enviado os dados contidos no formulario-->
              <!-- o metodo post é responsável por encapsular os dados do formulario sem exibilos no navegador criando um form data-->
              <form action="valida_login.php" method='post'>
                <div class="form-group">
                <!-- name recebe o valor contido no campo email e como não está sendo estabelecido nenhum metodo ele ira utilizar o metodo GET-->
                  <input name='email' type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name ='senha' type="password" class="form-control" placeholder="Senha">
                </div>
                <!-- então quando o submit é efetuado os dados são encapsulados e enviados pelo action-->

                <?php

                //isset realiza a verificação se o metodo login existe antes de tentar utilizar o mesmo
                //realizando a verificação do estado do login para antes de realizar uma ação
                //verifica se existe um valor associado ao login e se esse valor é igual a erro para que uma mensagem possa ser exibida.
                  if(isset($_GET['login']) && $_GET['login'] == 'erro') {
                ?>
                <div class=' text-danger mb-2'>-
                Usuario ou senha invalido(s).
                </div>

                <?php } ?>

                <?php
                //tratamento caso o usuario tente acessar outras páginas sem ter efetuado o login
                  if(isset($_GET['login']) && $_GET['login'] == 'erro2') {
                ?>
                <div class=' text-danger mb-2'>
                Faça login para ter acesso a outras páginas.
                </div>

                <?php } ?>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>