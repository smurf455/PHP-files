<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operadores aritmeticos</title>
    </head>

    <body>
        <?php
            $num1 = 10;
            $num2 = 2;

            echo "A soma entre $num1 e $num2 é igual a : " . ($num1 + $num2);
            echo '<br/>'; 
            echo "A subtração entre $num1 e $num2 é igual a : " . ($num1 - $num2);
            echo '<br/>';
            echo "A multiplicação entre $num1 e $num2 é igual a : " . ($num1 * $num2);
            echo '<br/>';
            echo "O resto entre $num1 e $num2 é igual a : " . ($num1 % $num2);

        ?>
    </body>
</html>