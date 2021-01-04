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
      .card-criar-anotacao{
        padding: 30px 0 0 0;
        width:100%;
        margin: 0 auto;
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
            <div class="card-criar-anotacao">
                <div class="card">
                    <div class="card-header">
                        Criar anotação
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="registra_anotacao.php" method='post'>
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input name='titulo' type="text" class="form-control" placeholder="Titulo">
                                    </div>

                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <textarea name="descricao" class="form-control" rows="10"></textarea>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a class="btn btn-lg btn-danger btn-block"href="home.php">Voltar</a>
                                        </div>

                                        <div class="col-6">
                                            <Button class="btn btn-lg btn-block btn-success text-white"type="submit">Registrar</Button>
                                         </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
      


</body>
</html>