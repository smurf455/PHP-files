<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Utilizando funcões</title>
    </head>
    <body>
        <?php 
            function mostrarMensagem(){
                echo 'Isto é uma mensagem';
            }
            mostrarMensagem();

            function multiplicarValores($valor1, $valor2){
                $result = $valor1 * $valor2;
                return  $result;
            }
           $resultado =  multiplicarValores(5, 30);
           echo '<br />';
           echo $resultado;
        ?>
    </body>
</html>