<?php
    //criação de classe
        class Pessoa {
                //crição de atributo
                public $nome = null;

                //construct é capaz de realizar ações no momento de instanciação de um objeto
                function __construct($nome) {
                    echo 'Objeto instanciado';
                     $this->nome = $nome;
                }
                //já o destruct é capaz de realizar ações quando algum objeto é excluido ou uma ação é finalizada
                function __destruct(){
                    echo 'processo finalizado';
                }

                function __get($atributo) {
                    return $this->$atributo;
                }

                function correr(){
                    echo $this->__get('nome') .' Está correndo';
                }
        }

            $pessoa = new Pessoa('William');        
            echo '<br /> Nome: '. $pessoa->__get('nome');
            echo '<br />';
            echo $pessoa->correr();
            echo '<br />';
            //unset($pessoa);
            
 ?> 
  