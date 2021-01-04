<?php
  //utilizando o namespace é possivel criar classes com o mesmo nome, só que em namespaces diferentes 
    namespace A;
    class Cliente implements CadastroInterface {
        public $nome = 'William';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function excluir(){
            echo 'Excluido';
        }
    }
    interface CadastroInterface{
        public function excluir();
    }

    //------------------------------------------------------------
    namespace B;
    //também é possivel implementar metodos de interfaces em outros namespaces apenas referenciando em qual namespace está o método
    //nesse caso a aplicação irá dar um erro pois ela está esperando receber os metodos que foram implementados no namespace A
    class Cliente implements \A\CadastroInterface{ 
        public $nome = 'Santos';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function salvar(){
            echo 'Salvo';
        }
    }
    interface CadastroInterface{
        public function salvar();
    }

    $x = new \A\ Cliente();
    print_r($x);
    echo $x->__get('nome'); 
?>