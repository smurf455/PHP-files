<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>utilizando o Switch</title>
    </head>
    <body>
    <?php
        $opcao = '3';

        switch($opcao) {
            case 'primeiro':
                echo 'primeiro case';
                break;
            case 'segundo':
                echo 'segundo case';
                break;
            case 3:
                echo 'terceiro case';
                break;
        }
        
    ?>
    </body>
</html>