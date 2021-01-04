<?php
    //através da classe veiculo atributos e métodos podem ser herdados para classes filhas
    class Veiculo{
        function __construct($cor, $placa){
             $this->cor = $cor;
             $this->placa = $placa;
         }
 
       public  $cor = null;
       public $placa = null;
     }

    class Carro extends Veiculo{
        public $tetoSolar = 'sim';

        function abirJanela(){
            echo 'abrindo janela';
        }
    }

    class Moto extends Veiculo{
        public 
        function empinar(){
            echo 'Empinando';
        }
    }

    $carro = new Carro('prata', 'DFT-3252');
    $moto = new Moto('vermelha','PKG-4158');

    echo '<pre>';
    print_r($carro);
    echo '<br><br />';
    print_r($moto);
    echo '</pre>';
    
?>