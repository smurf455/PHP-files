<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IF else prática</title>
    </head>

    <body>
        <?php
        $cartao = true;
        $valor_compra = 100;
        $valor_frete = 50;
        ?>

        <h1> Ficha cadastral </h1>

        <p>Possui cartão da loja ? </p>
        <?php
        if($cartao == true){
            echo ' SIM';
        }
        ?>
        
        <p>Valor da compra:  </p>
         <?php
            echo $valor_compra;
        ?>

        <p> Valor do frete : </p>
        <?php
            if($cartao == true && $valor_compra >= 400){
                $valor_frete = 0; 
                
                echo 'Parabéns você tem direito a frete grátis';
            } else if($cartao == true && $valor_compra >= 300){
                $valor_frete = 10;
                echo 'você recebeu um desconto no frete e seu novo valor é dê: '. $valor_frete . 'R$'; 

            } else if($cartao == true && $valor_compra >= 100){
                $valor_frete = 25 ;
                echo 'você recebeu um desconto no frete e seu novo valor é dê: ' . $valor_frete . 'R$';
            } else {
                echo 'Parece que você não atende os requisitos para frete grátis.';
            }
            
        ?>


    </body>
</html>