<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificando o tipo das variaveis</title>
    </head>

    <body>
        <?php
            //conversão de tipos de variaveis podendo ser float, string, integer ,boolean 
            $valor = 10;
            $valor2 =  (float) $valor;
            echo gettype($valor2);
        ?>
    </body>
</html>