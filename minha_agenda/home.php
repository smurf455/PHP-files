<?php
/*verificação caso o usuario não tenha efetuado login ou tenha realizado um login invalido
e mesmo assim tente acessar alguma página*/
  require_once "validador_acesso_include.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0c0cb1fff6.js" crossorigin="anonymous"></script>
    <title>Minha Agenda</title>

    <style>
      .card-home{
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
      .far{
          color:#29a329;
      }

      ul{
          list-style-type: none;
      }
    
    </style>
</head>
<body>
      <!-- Image and text -->
  <nav class="navbar navbar-light bg-success">
    <a class="navbar-brand" href="#">
    <i class="fa fa-calendar-plus-o text-white" aria-hidden="true"> Minha Agenda</i>
    </a>
    <ul class="nav-navbar">
      <li class='nav-item'>
        <a class='nav-link text-white' href="logoff.php">SAIR</a>
      </li>
    </ul>
  </nav>

  <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="criar_anotacao.php">
                  <i class="far fa-clipboard fa-8x"></i>
                 </a>
                 <h3 class="ml-2"> Fazer anotação</h3>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_anotacao.php">
                  <i class="far fa-file fa-7x mt-2"></i>
                  </a>
                  <h3 class="ml-2"> Consultar anotação</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      


</body>
</html>