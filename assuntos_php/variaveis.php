<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tipos de variáveis</title>
    </head>

    <body>
        <?php 
            //String
            $nome = 'William dos santos santana';

            //int
            $idade = 21;

            //float
            $peso = 69.20;

            //Boolean
            $fumante = false //true or false;
        ?>
            <h1> Ficha cadastral </h1>
            <p>Nome: <?= $nome ?> </p>
            <p>Idade: <?= $idade ?> </p>
            <p>Peso: <?= $peso ?> </p>
            <p>Fumante: <?= $fumante ?> </p>
        
    </body>
</html>