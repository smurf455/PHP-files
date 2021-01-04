    <?php
    //através da classe veiculo atributos e métodos podem ser herdados para classes filhas
    class Veiculo{
        function __construct($cor, $placa){
             $this->cor = $cor;
             $this->placa = $placa;
         }
 
       public  $cor = null;
       public $placa = null;

       function trocarMarcha(){
            echo 'Desengatar enbrenhagem com o pé e engatar a marcha com a mão';
        }
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
            //caso o objeto tenha particularidades na execução da função podemos realizar uma sobreescrita do método herdado
        }

        function trocarMarcha(){
            echo 'Desengatar enbrenhagem com a mão e engatar a marcha com o pé';
            }

    }

    class Caminhao extends Veiculo {

    }

   

    $carro = new Carro('prata', 'DFT-3252');
    $moto = new Moto('vermelha','PKG-4158');
    $caminhao = new Caminhao('verde','5456');


    echo '<pre>';
    print_r($carro);
    echo '<br><br />';
    print_r($moto);
    echo '</pre>';

    $carro->trocarMarcha();
    echo '<br />';
    $moto->trocarMarcha();
    echo '<br />';
    $caminhao->trocarMarcha();

    
?>