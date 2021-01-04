<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calcular imposto de renda</title>
    </head>
    <body>
            <?php
                function calcularImposto($salario){
                    if($salario <= 1903.98){
                        echo 'isento da taxa';
                    }  else if ($salario >= 1903.99 && $salario <= 2826.65){
                       $resultado =  $salario += ($salario / 100) * 7.5;
                        echo "o seu reajuste é de 7,5% e o valor atualizado é dê: $resultado"; 

                    }  else if ($salario >= 2826.66 && $salario <= 3751.05){
                        $resultado =  $salario += ($salario / 100) * 15;
                        echo "o seu reajuste é de 15% e o valor atualizado é dê: $resultado";

                    } else if ($salario >= 3751.06 && $salario <= 4664.68){
                        $resultado =  $salario += ($salario / 100) * 22.5;
                        echo "o seu reajuste é de 22.5% e o valor atualizado é dê: $resultado";

                    } else if($salario > 4664.68){
                        $resultado =  $salario += ($salario / 100) * 27.5;
                        echo "o seu reajuste é de 27.5% e o valor atualizado é dê: $resultado";
                    }
                }
               calcularImposto(2931.30);
                
            ?>
    </body>
</html>