<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operadores null false e empty</title>
    </head>
    <body>
        <?php
            $funcionario1 = null; 
            $funcionario2 = '';
            $funcionario3 = false;

            if(is_null($funcionario1)){
                echo 'Sim, a variavel é null';
            } else {
                echo 'Não, a variavel não é null';
            }
            echo '</br>';
            if(empty($funcionario2)){
                echo 'Sim, a variavel é vazia';
            } else {
                echo 'Não, a variavel não é null';
            }
            echo '</br>';
            if(empty($funcionario1)){
                echo 'Sim, a variavel é vazia';
            } else {
                echo 'Não, a variavel não é null';
            }
            echo '</br>';
            if(is_null($funcionario3)){
                echo 'Sim, a variavel é null';
            } else {
                echo 'Não, a variavel não é null';
            }
        ?>
    </body>
</html>