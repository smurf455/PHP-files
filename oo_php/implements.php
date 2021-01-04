<?php
 //as interfaces são utilizadas para especificar quais métodos devem ser implementados nas classes
 //pode ser utilizado por um grupo de programadores para todos ficarem cientes de quais métodos devem ser utilizados.
    interface BasicFunc{
        public function ligar();
        public function desligar();
    }
    class Geladeira implements BasicFunc {
        public function ligar(){
            echo 'Ligado';
        }

        public function desligar() {
            echo 'Desligado';
        }
    }

    class TV implements BasicFunc{
        public function ligar(){
            echo 'Ligado';
        }

        public function desligar() {
            echo 'Desligado';
        }
    }

    $x = new Geladeira();
    $x->ligar();
    //----------------------------------------

    //classes também podem receber mais de uma interface

    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface {
        public function respirar(){
            echo 'Posso respirar';
        }
        public function andar() {
            echo 'Posso andar';
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface {
        public function respirar() {
            echo 'Posso respirar'; 
        }
        public function nadar(){
            echo 'Estou nadando';
        }
        
    }

    //---------------------------------------------------

    //Quando utlizamos uma interface que está herdando caracteristicas de outra também se faz necessário útilizar os métodos herdados por ela

    interface AnimalInterface {
        public function comer();
    }

    interface AveInterface extends AnimalInterface {
        public function voar();
    }

    class Passaro implements AveInterface {
        public function voar(){
            echo 'Estou voando';
        }
        public function comer() {
            echo 'Humm que delicia';
        }
        
    }
    echo '<br />';
    $y = new Passaro();
    echo $y-> comer();
?>