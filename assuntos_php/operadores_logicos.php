<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operadores lógicos</title>
    </head>
    
    <body>
    <?php 
        // && OU AND retornará verdadeiro se ambas as expressões forem verdadeiras
        // OR OU || retornará verdadeiro se ao menos um das expressões for verdadeira
        // XOR retorna verdadeiro se uma das expressões for verdadeira e a outra falsa
        // ! inverte o resultado gerado pela expressão

        /*como os dois valores são verdadeiros será retornado verdadeiro
        if(55 > 10 && 42 >= 2){
            echo 'verdadeiro';
        } else {
            echo 'falso';
        }
        */

        /*como um dos valores é verdadeiro o valor retornado será verdadeiro
        if(55 > 10 OR 42 < 2){
            echo 'verdadeiro';
        } else {
            echo 'falso';
        }
        */


        /* como apenas um resultado é verdadeir o o outro é falso será retornado verdadeiro
        if(55 > 10 XOR 42 < 2){
            echo 'verdadeiro';
        } else {
            echo 'falso';
        }
        */

        /* o operador inverte o valor da operação por conta disso nesse caso o valor retornado será falso
        if(55 > 10 ! 42 > 2){
            echo 'verdadeiro';
        } else {
            echo 'falso';
        }
        */

    ?>
    </body>
</html>