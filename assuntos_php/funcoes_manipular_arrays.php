<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funções para manipulação de arrays</title>
    </head>
    <body>
        <?php
            $array = 'String';
            //teste se o parametro passado é um array
            $retorno =  is_array($array);

            if($retorno){
                echo 'é um array';
            } else {
                echo 'não é um array';
            }
            echo '<hr>';
            //pega apenas as chaves do array
            $array2 = [1 => 'Costela', 5=> 'Bisteca', 9=>'Peito'];
            $chavesArray = array_keys($array2);

            echo '<pre>';
            print_r($chavesArray);
            echo '</pre>';
            echo '<hr>';
            //sort utilizado para ordenar itens em um array

            $array3 = ['Teclado','Mouse','Mousepad','Headset'];
            echo '<pre>';
            print_r($array3);
            echo '</pre>';

            sort($array3); //retorna true ou false para a ordenação
            
            echo '<pre>';
            print_r($array3);
            echo '</pre>';
            echo '<hr>';
            //asort ordena os itens preservando os índices
            $array4 = ['Teclado','Mouse','Mousepad','Headset'];
            echo '<pre>';
            print_r($array4);
            echo '</pre>';

            asort($array4); //
            
            echo '<pre>';
            print_r($array4);
            echo '</pre>';
            echo '<hr>';

            //count retorna o numero de elementos de um array
            $array4 = ['Teclado','Mouse','Mousepad','Headset'];
            echo count($array4 ). ' itens';
            echo '<hr>';

            //array_merge faz a junção de arrays criando um novo array
            $array11 = ['google', 'youtube'];
            $array22 = ['Opera', 'Chrome'];
            $array33 = ['Windows', 'Linux'];
            $novo_array = array_merge($array11, $array22 ,$array33);

            echo '<pre>';
            print_r($novo_array);
            echo '</pre>';
            echo '<hr>';

            //explode divide uma string baseada em um delimitador transformando(a) em array
            $string = '02/10/1998';
            $novo_valor = explode('/', $string);
            echo $string;
            echo '<pre>';
            print_r($novo_valor);
            echo '</pre>';
            echo '<hr>';

            //implode junta elementos de um array transformando os itens em uma string

            $array5 = ['a', 'b', 'c', 'd'];
            print_r($array5);
            $array_to_string = implode(',', $array5);
        
            echo '<pre>';
            print_r($array_to_string);
            echo '</pre>';
            echo '<hr>';

        ?>
    </body>
</html>