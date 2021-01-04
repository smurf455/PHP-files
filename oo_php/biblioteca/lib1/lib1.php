<?php
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

    
?>