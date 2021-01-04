<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Um pouco mais sobre o foreach</title>
    </head>
    <body>
        <?php
            $funcionarios = [
                array('Nome' => 'William', 'Salario' => 4000, 'Profissão' => 'Programador Web'),
                array('Nome'  => 'Bruno', 'Salario' => 5000, 'Profissão' => 'Desenvolvedor de jogos'),
                array('Nome'  => 'Daniel', 'Salario' => 4900, 'Profissão' => 'Gerente de redes'),
                array('Nome'  => 'Adelmo', 'Salario' => 9000, 'Profissão' => 'Programador Full Stack')
            ];
            //Primeiro laço que recupera um array de arrays
            foreach($funcionarios as $indice => $nome_funcionarios){
                /*segundo laço que recupera o valor contido dentro desses arrays desse modo caso novos valores sejam inseridos eles
                automaticamente irão ser exibidos*/ 

                    foreach($nome_funcionarios as $indice2 => $valor_indice){
                        print_r("$indice2 - $valor_indice <br />" );
                    }
                    echo '<hr />';
                
            }
        ?>
    </body>
</html>