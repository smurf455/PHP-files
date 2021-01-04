<?php

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
    //data source name
   $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
   $usuario = 'root';
   $senha = '';
    
   try{
       $conexao = new PDO($dsn, $usuario, $senha);

       //query
       $query = "select * from tb_usuarios where email = :usuario AND senha = :senha";
        //para evitar um SQLInjection
    //prepare utilizado para não executar de uma vez esperar uma condição para continuar
       $stmt = $conexao->prepare($query);
    //condicao para não permitir SQL injections
       $stmt->bindValue(':usuario', $_POST['usuario']);
       $stmt->bindValue(':senha', $_POST['senha']);

       $stmt->execute();

      $usuario =  $stmt->fetch();

      echo '<pre>';
      print_r($usuario);
      echo '<pre/>';
        
   } catch(PDOException $e) {
       echo 'Erro:' .$e->getCode(). ' Mensagem> ' .$e->getMessage();
   }
    }
   
  
?>

<html>
   <head>
        <meta charset="utf-8">
        <title>Login</title>
   </head>

   <body>
       <form method="post" action="sql_injection.php">
            <input type="text" placeholder="usuario" name="usuario"/>
            <br/>
            <input type="password" placeholder="senha" name="senha">
            <br/>
            <button type="submit">Entrar</button>
       </form>
   </body>