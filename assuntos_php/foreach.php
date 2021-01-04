<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Utilizando o foreach</title>
    </head>
    <body>
            <?php
                $itens = [ 'Cadeira', 'Sofa', 'Armario', 'Fogão'];

                foreach($itens as $item){
                    echo $item . '<hr>'; 

                    if($item == 'Armario'){
                        echo ' Promoção em todos os armarios 30% de desconto no boleto bancario!';
                        echo '<hr>';
                    }
                }
            ?>
    </body>
</html>