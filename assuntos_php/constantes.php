<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=], initial-scale=1.0">
        <title>Variaveis constantes</title>
    </head>

    <body>
        <?php 
            //função utilizada para indicar uma constante
            //por questões de usabilidade é interessante utilizar constantes em caixa alta para melhor identificação
            define('BD_URL', 'endereco_bd_dev');
            define('BD_USUARIO', 'usuario_dev');
            define('BD_SENHA', 'senha_dev');

            echo BD_URL . '<br />';
            echo BD_USUARIO . '<br />';
            echo BD_SENHA . '<br />';
        ?>
    </body>
</html>