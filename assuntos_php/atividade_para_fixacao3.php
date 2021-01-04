<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mega sena da virada</title>
    </head>
    <body>
        <?php 
            /*Crie um script capaz de produzir, através de um laço de repetição, um array com 6 elementos númericos aleatorios
            entre 1 e 60, simulando o funcionamento do sorteio da mega sena. Atente-se ao fato de que os números aleatórios 
            contidos dentro do array não podem ser repetidos.*/
             
               
              $numero_sorteio = array();
              for($i = 0; $i < 6; $i++){
                  $numero_sorteado = rand(1,60);
                  if(in_array($numero_sorteado, $numero_sorteio)){
                      $i--;
                      continue;
                  }
                  $numero_sorteio[] = $numero_sorteado;
              }
                echo("$numero_sorteio");
        ?>
    </body>
</html>