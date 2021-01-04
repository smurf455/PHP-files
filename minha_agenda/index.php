<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0c0cb1fff6.js" crossorigin="anonymous"></script>
    <title>Minha Agenda</title>

    <style>
      .card-login{
        padding: 30px 0 0 0;
        margin: 0 auto;
        width:350px;
        margin-top: 30px;
      }
    
    </style>
</head>
<body>
      <!-- Image and text -->
  <nav class="navbar navbar-light bg-success">
    <a class="navbar-brand" href="#">
    <i class="fa fa-calendar-plus-o text-white" aria-hidden="true"> Minha Agenda</i>
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
                  <form action='valida_login.php' method='post' >
                    <div class = "form-group">
                      <input name='email'type="email" class="form-control" placeholder="Digite seu email">
                    </div>

                    <div class = "form-group">
                      	<input name='senha' type='password' class="form-control" placeholder="Digite sua senha">
                    </div>

                    <?php
                    /*Primeiro tratamento Agora precisamos realizar uma ação caso o login apresente erro, então vamos vericar utilizando 
                    o isset, que irá verificar se existe um login e se o mesmo é igual a erro
                    */
                    if(isset($_GET['login']) && $_GET['login'] == 'erro'){
                      ?>
                      <div class='btn btn-danger mb-2'>
                      Úsuario ou senha invalido(s).
                      </div>
                    <?php } ?>

                      
                    <?php
                    //Segundo tratamento para caso o úsuario tente acessar outra seção sem ter acesso a mesma
                    if(isset($_GET['login']) && $_GET['login'] == 'erro2'){
                      ?>
                      <div class='btn btn-danger mb-2'>
                        É necessário efetuar o login.
                      </div>
                    <?php } ?>
                    
                    
                    <button class="btn btn-lg btn-success btn-block" type="submit"> 
                      Entrar
                    </button>
                  </form>
              </div>
          </div>
      </div>

      </div>
   </div>

</body>
</html>