<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funções para manipular strings</title>
    </head>
    <body>
        <?php 
            $texto = 'teste DE manipulacao ';
            //deixando a string em caixa baixa
            echo strtolower($texto) . '<br />';
            echo '<hr>';
            echo $texto . '<br />';
            echo '<hr>';
            //deixando a string em caixa alta
            echo strtoupper($texto). '<br />';
            echo '<hr>';
            //deixando a primeira letra maiuscula
            echo ucfirst($texto);
            echo '<hr>';
            //contar a quantidade de caracteres incluindo espaços em branco
            echo strlen($texto);
            echo '<hr>';
            //modificar uma cadeia de carcteres 
            echo ($texto) . '<br />';
            echo str_replace('manipulacao', 'pika'  , $texto) . '<br />';
            echo '<hr>';
            //recuperar caracteres a partir de um ponto especifico
            echo substr($texto ,6 , 20 );


        ?>
    </body>
</html>