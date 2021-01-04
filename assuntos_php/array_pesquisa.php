<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pesquisa em arrays</title>
    </head>
    <body>
        <?php
            //in_array() retorna true or false
            //array_search() retorna o indice do item e caso não ache retorna null
            $lista_itens = ['Sword', 'Armor','Neckless'];


            echo '<pre>';
            print_r($lista_itens);
            echo '</pre>';

            $result =  array_search('Armor', $lista_itens);

            if($result != null){
                echo 'Sim, o item existe no array';
            } else {
                echo 'Parece que esse item não existe no array';
            }
            //anexando um array a um índice 
            $lista_coisas = [
                'itens' => $lista_itens,
                'classe' => ['Warrior', 'Mage','Beserk','Ladino']
            ];
                echo '<br>';
            echo array_search('Sword', $lista_coisas['itens']);
            
            
        ?>
    </body>
</html>