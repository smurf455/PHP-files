<?php
    class Pai {
        private $nome = 'William';
        protected $sobrenome = 'Santos';
        public $humor = 'Puto';
        
        //também podemos utilizar dos métodos mágicos get e set para ter acesso aos atributos se eles forem definidos como públicos
        public function __get($attr) {
            return $this->$attr;   
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        }
        

        private function executarMania() {
            echo 'cross your legs';
        }

        protected function responder() {
            echo 'Who are you ';
        }
        //operações lógicas podem ser feitas antes da exibição de métodos privados, dessa forma trazendo
        //maior segurança para as aplicações.
        public function acao () {
            $x = rand(1,10);
            
            if($x <= 8 && $x >= 1){
                //função acao que é publica acessando as funções responder e executarMania, além de realizar um teste lógico.
                $this->responder();
            } else{
                $this->executarMania();
            }
        }
    }

    class Filho extends Pai {
        function __construct(){
            //exibir os métodos do próprio objeto 
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }
        //mesmo sendo utilizado no contexto do objeto filho, essa função irá ter as caracteristicas do pai já que é a classe herdada
        private function executarMania() {
            echo 'What is this nigga';
        }

        //para que a função sejá executada no contexto da classe filha pode fazer o seguinte

        public function x() {
            $this->executarMania();
        }
    }
        /*
        $pai = new Pai();
        echo $pai->nome;
        echo '<br />';
        //chamda do método público que acessa métodos privados da aplicação.
        echo $pai->acao();
        */
        /*
        $filho = new Filho();
        echo $filho->getAtributo('humor');
        echo $filho->setAtributo('humor', 'virado no caraio');
        echo '<br />';
        echo $filho->humor;
        */

    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    $filho->acao();
    echo '<br />';
    $filho->x();

?>