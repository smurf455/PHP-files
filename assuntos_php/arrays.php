<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays</title>
    </head>
    <body>
        <?php 
            //Array sequencial 
            $lista_frutas = array('Banana', 'Abacate', 'Laranja');
            //$lista_frutas[] = ' Maça';
            //$lista_frutas = ['Uva'];

            echo '<pre>';
                print_r($lista_frutas);
            echo '</pre>';

            echo '<br>';
            echo '<hr>';

            echo '<pre>';
                var_dump($lista_frutas);
            echo '</pre>';

            //Array associativos 
            $lista_frutas2 = array('g' => 'Morango', '3' => 'Acerola', 'x' => 'Umbu');
            print_r($lista_frutas2);
            
            echo'<br>';

            echo($lista_frutas2['3']);
        ?>  
    </body>
</html>