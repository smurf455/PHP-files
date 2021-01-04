<?php
    //metodos estaticos podem ser utilizados quando surgem necessidades em que não queremos instanciar toda uma classe
    //mas sim realizar uma operação simples na mesma.
    class Exemplo {
        public static $atributo1 = 'eu sou um atributo estatico';
        public $atributo2 = 'eu sou um atributo normal';

        public static function metodo1(){
            echo 'sou um método estatico';
        }

        public function metodo2() {
            echo 'sou um método normal';
        }
    }

    //atributos estáticos podem ser utilizados sem a instanciação de objetos se utilizados com a sintaxe apropriada utlizando o nome da 
    //classe seguido de ::
    echo Exemplo::$atributo1;
    echo '<br />';
    echo Exemplo::metodo1();
    echo '<br />';
    echo Exemplo::metodo2();
    echo '<br />';
    //porém atributos não estaticos não podem ser acessados    
    echo Exemplo::$atributo2;
?>