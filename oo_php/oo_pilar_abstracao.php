<?php
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numeroFilhos = null;

        //getters e setters utilizados com overload
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        } 

        function __get($atributo){
            return $this->$atributo;
        } 
        /*
        //Setters

        function setNome ($nome){
            $this->nome = $nome;
        }

        function setTelefone ($telefone){
            $this->telefone = $telefone;
        }

        function setNumeroFilhos ($numeroFilhos){
            $this->numeroFilhos = $numeroFilhos;
        }

        //Getters

        function getNome (){
            return $this->nome;
        }

        function getTelefone (){
            return $this->telefone;
        }

        function getNumeroFilhos (){
            return $this->numeroFilhos;
        }
        */
        //métodos
        function resumeInfo() {
         return  $this->__get('nome') . " possui " . $this->__get('numeroFilhos') . " filhos ";
        }

        function alterarNumFilhos($numeroFilhos) {
            $this->numeroFilhos = $numeroFilhos;
        }
        
        function alterarNome($novoNome) {
            $this->nome = $novoNome;
        }

        function alterarTelefone($novoTelefone) {
            $this->telefone = $novoTelefone;
        }
    }

    $funcionarioA = new Funcionario;
    $funcionarioA->__set('nome', 'Robiscleison');
    $funcionarioA->__set('telefone', '3384-6760');
    $funcionarioA->__set('numeroFilhos',3);
    echo $funcionarioA->resumeInfo();
   // echo $funcionarioA->__get('nome') . ' ,telefone: '. $funcionarioA->__get('telefone') . ' ,possui '. $funcionarioA->__get('numeroFilhos') . ' filhos'; 
    echo '<hr>';    

    $funcionarioB = new Funcionario;
    $funcionarioB->__set('nome', 'Juraci');
    $funcionarioB->__set('telefone', '8231-8070');
    $funcionarioB->__set('numeroFilhos',0);
    echo $funcionarioB->resumeInfo();

    #utilizando os métodos para modificação
    echo '<hr>';
    $funcionarioB = new Funcionario;
    $funcionarioB->__set('nome', 'CabeçaDeGelo');
    $funcionarioB->__set('telefone','6666-6666');
    $funcionarioB->__set('numeroFilhos', 2);
    //echo $funcionarioB->__get('nome') . ' ,telefone: '. $funcionarioB->__get('telefone') . ' ,possui '. $funcionarioB->__get('numeroFilhos') . ' filhos';
?>

