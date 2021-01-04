<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>funções para trabalhar com datas</title>
    </head>
    <body>
        <?php
            /*
            //recuperação da data atual
            echo date('d/m/Y H:i');
            //Segundo metodo para alterar a região a qual está ligada a data
             date_default_timezone_set('America/Sao_Paulo');
            */
             $data_inicial = '2019-03-10';
             $data_final = '2020-06-26' ;

             //timestamp considera o tempo entre 01/01/1970 até a data atual.
             // em JS recebemos o retorno em milisegundos já em PHP em segundos.

             $time_inicial = strtotime($data_inicial);
             echo $data_inicial . '-->' . $time_inicial;
             echo '<br />';
             $time_final = strtotime($data_final);
             echo $data_final . '-->' . $time_final;

             $diferenca_times = abs($time_final - $time_inicial); //abs função que retorna valor absoluto
             echo '<br />';
             echo 'A diferença em segundo entre a data inicial e a final é dê: ' . $diferenca_times ;
             echo '<br />';
             $segundos_em_um_dia = 24 * 60 * 60;
             echo 'Um dia possui :' . $segundos_em_um_dia;
             echo '<br />';
             $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_em_um_dia;
             echo ' A diferença de dias é igual a ' . $diferenca_de_dias_entre_as_datas . ' dias';

        ?>
    </body>
</html>