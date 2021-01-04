<?php
    try {
        //lógica que queremos tratar
        echo 'Estou no try';
        echo '<br />';

        if(!file_exists('require_arquivo_a.php')){
            //lógica criada para gerar um erro e assim lançar uma excessão para esse erro gerado atráves do throw
            throw new Exception('O arquivo em questão foi buscado as'. date('d/m/Y H:i:s'));
        }

        //responsável por recuperar um erro ou uma exception caso exista.
    } catch(Error $e) {
        echo 'Que pena parece que algo não deu certo';
        echo 'Esté foi o erro: ' . $e;
    } catch(Exception $e) {
        echo 'Isto é uma excessão ';
        echo $e;
    }  finally {
        echo '<br />';
        echo 'Finally';
    }
?>