<?php
    session_start();
    //tratativas para caracteres delimitadores 
    //em que caso uma cerquilha for utilizada no texto ela será substituida por -
    $titulo = str_replace('/','-',$_POST['titulo']);
    $categoria = str_replace('/','-',$_POST['categoria']);
    $descricao = str_replace('/','-',$_POST['descricao']);
            //atribuição do id para o controle de usuario
    $texto = $_SESSION['id']. '/'. $titulo . '/' .  $categoria . '/' . $descricao . PHP_EOL; //constante para quebra de linha após uma inserção
    

    //função para abrir um arquivo de texto
    $arquivo = fopen('../../app_help_desk/arquivo.txt','a'); 

    //função para escrever no arquivo que recebe dois parâmetros um onde será escrito e o outro o que
    // será escrito no arquivo
    fwrite($arquivo, $texto);

    //funcao para fechar o arquivo que foi aberto
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>