<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funções nativas para tarefas matemáticas</title>
    </head>
    <body>
        <?php
            $numero = 7.18;
            //função para arrendodamento para cima
            echo ceil($numero);
            echo '<br />';

            //funcao para arredondar para baixo
            echo floor($numero);
            echo '<br />';

            //funcao para realizar arredondamento inteligente
            echo round($numero);
            echo '<br />';

            //funcao para gerar um numero aleatorio
            echo rand(1, 60);
            echo '<br />';

            //funcao para retornar valor da raiz quadrada
            echo sqrt($numero);

            echo getrandmax();


            
        ?>
    </body>
</html>