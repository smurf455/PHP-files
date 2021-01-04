<?php
    //data source name
   $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
   $usuario = 'root';
   $senha = '';
    // Utilizando o fetchAll
   try {
    $conexao = new PDO($dsn,$usuario ,$senha );

    $query = '
        select * from tb_usuarios 
        ';
    //retorna apenas um registro
      //  $lista = $stmt->fetch(PDO::FETCH_ASSOC)
    //o Metodo query retorna um PDO statemant
   // $stmt = $conexao->query($query);

    //outra maneira é utilizar o metodo dentro do foreach para recuperar os valores
    foreach($conexao->query($query) as $key => $value){
        print_r($value[1]);
        echo '<hr>';
    }

    /*
    //retorna os indices de forma associativa e como array
    $lista_usuario = $stmt->fetchAll(PDO::FETCH_ASSOC); //FETCH_ASSOC retorna apenas indices associativos e FETCH_NUM Retorna apenas os indices numericos
    //Podemos até mesmo receber um array de objetos através do FETCH_OBJ
    //echo '<pre>';
    //print_r($lista);
    //echo '</pre>';

    
    //acessando os índices de cada registro utilizando foreach
    foreach($lista_usuario as $key => $value)   {
        echo $value['nome'];
        echo '<hr>';
    } 
   */

    } catch(PDOException $e){
    echo 'Erro:' . $e->getCode(). 'Mensagem'. $e->getMessage();
    //registrar erro
   }
?>