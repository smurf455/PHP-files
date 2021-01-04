<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operadores de incremento e decremento</title>
    </head>
    <body>
        <?php
            $a = 11;
            //pós incremento
            echo " o valor contido em a é:  $a <br />";
            echo 'Após o incremento o valor é dê: '. $a++ . '<br />';
            echo " O valor atualizado é dê : $a";


            //pré incremento
            echo " o valor contido em a é:  $a <br />";
            echo 'Após o incremento o valor é dê: '. ++$a . '<br />';
            echo " O valor atualizado é dê : $a";
            
        ?>
    </body>
</html>