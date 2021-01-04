<?php
/*verificação caso o usuario não tenha efetuado login ou tenha realizado um login invalido
e mesmo assim tente acessar alguma página*/
  require_once "validador_acesso_include.php";
?>

<?php
    //variavel que recebera as anotações
   $anotacoes = array();
   //variavel para executar a leitura dos arquivos
   $arquivo = fopen('arquivo.hd', 'r');

   //condição que irá retornar os itens presentes no arquivo até chegar o final do arquivo
   while(!feof($arquivo)){
       //criação da variavel registro que receberá o valor de cada indice a cada interação
       $registro = fgets($arquivo);
    //explode fazendo com que a cada item seja atribuido a um array separando eles por cada '/'
       $registro_detalhes = explode('/', $registro);
    //verificação caso a pessoa logada seja uma pessoa comum, fazendo com que eles só visualize
    //as anotações feitas por ele
       if($_SESSION['perfil_id'] == 2){
        //verificação para testar se o id do usuario logado é diferente do úsuario da seção
            if($_SESSION['id'] != $registro_detalhes[0]){
                //não exibe as anotações que forem diferentes do id do úsuario
                continue;

            } else{
                $anotacoes[] = $registro; //adiciona o registro do arquivo ao array $chamados
            }
       } else{
            $anotacoes[] = $registro; //adiciona o registro do arquivo ao array $chamados
       }
   }

    //fechamento do arquivo
    fclose($arquivo);
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
      .card-consultar-agenda{
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }

      ul{
          list-style-type: none;
      }
    
    </style>
</head>
<body>
     
  <nav class="navbar navbar-light bg-success">
    <a class="navbar-brand" href="#">
    <i class="fa fa-calendar-plus-o text-white" aria-hidden="true"> Minha Agenda</i>
    </a>
    <ul class='nav-navbar '>
      <li class='nav-item'>
        <a class='nav-link text-white' href="logoff.php">SAIR</a>
      </li>
    </ul>
  </nav>

  <div class="container">    
      <div class="row">

        <div class="card-consultar-agenda">
            <div class="card">
                <div class="card-header">
                    Consultar Anotação
                </div>

                <div class="card-body">
                <? foreach($anotacoes as $anotacao){ ?>
                <?
                //irá colocar cada item delimitado por '/' em um array
                $item_anotacao = explode('/', $anotacao);

                //caso o numero de itens exibidos seja menor que 2 eles não serão exibidos
                if(count($item_anotacao) < 2){
                    continue;
                }
                ?>
                    <div class="card mb-3 bg-light">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item_anotacao[1]?></h5>
                            <p class="card-text"><?= $item_anotacao[2]?></p>
                        </div>
                    </div>
                <? } ?>
                    <div class="row mt-5">
                        <div class="col-6">
                            <a class="btn btn-lg btn-danger btn-block" href="home.php">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>
 </div>
 </body>
 </html>