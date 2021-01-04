<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays multidimensionais</title>
    </head>
    <body>
        <?php
            $lista_coisas = [];
            $lista_coisas['Componentes'] = ['HD','SSD','Placa-Mãe','Placa de video','Memória'];
            $lista_coisas['Perifericos'] = ['Teclado','Mouse','HeadSet'];

            echo '<pre>';
            print_r($lista_coisas);
            echo '</pre>';
        ?>
    </body>
</html>