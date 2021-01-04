<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loops while </title>
    </head>
    <body>
        <?php
            $valor = 0;
            while($valor < 10){
                $valor++;
                if($valor == 2 || $valor == 6){
                    continue;
                }
                print_r($valor);
                echo '</br>';
            }
        ?>
    </body>
</html>