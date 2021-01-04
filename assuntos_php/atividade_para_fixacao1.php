<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ativdade para fixação 1</title>
    </head>

    <body>
        <?php 
            $idade = 21;
            $peso = 69.12;
            $result = '';
            if($idade >=16 && $idade <=69 && $peso >= 50 ){
                $result =  'Que bom você atende aos requisitos para a doação!';
            } else {
                $result =  'Que pena, mas parece que você não atende aos requisitos para a doação de sangue';
            }

        ?>

        <h1>Sistema de doação de sangue</h1>

        <p>
            <?=
                $result
            ?>
         </p>

    </body>
</html>