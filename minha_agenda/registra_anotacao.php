<?php
    //inicia uma seção
    session_start();

    //tratativas para caracteres delimitadores 
    //em que caso uma / for utilizada no texto ela será substituida por -
    $titulo = str_replace('/', '-',$_POST['titulo']);
    $descricao = str_replace('/', '-', $_POST['descricao']);

    //atribuição das variaveis a uma variavel que irá se chamar texto para posterior utilização
    //além da utilização da PHP_EOL que a cada inserção irá quebrar uma linha 
    $texto = $_SESSION['id'] . '/' . $titulo . '/' . $descricao . PHP_EOL;

    //após isso já podemos criar um arquivo de texto para inserção de valores
    //função para abrir um arquivo
    $arquivo = fopen('arquivo.hd','a');
    //função que irá escrever no arquivo, que requer dois parametros o arquivo ao qual será escrito os dados
    //e o que vai ser escrito
    fwrite($arquivo, $texto);

    //funcao para fechar o arquivo
    fclose($arquivo);
    header('Location: criar_anotacao.php');
?>