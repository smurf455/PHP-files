<?php
    //data source name
   $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
   $usuario = 'root';
   $senha = '';

   try {
    $conexao = new PDO($dsn,$usuario ,$senha );
    //criando uma query para criar uma tabela no banco de dados

    $query = '
        create table tb_usuarios(
            id int not null primary key auto_increment,
            nome varchar(50) not null,
            email varchar(100) not null,
            senha varchar(32) not null

        )
    ';
    //metodo exec espera um parametro como query e retorna a quantidade de linhas modificadas ou removidas
   $retorno =  $conexao->exec($query);
    //Apenas retorna a quantidade de linhas afetadas por UPDATE DELETE OU INSERT
   echo $retorno;
    //populando a tabela criada no banco de dados
   $query = '
        insert into tb_usuarios(
            nome, email, senha 
        ) VALUES (
            "William Santos", "Smurf45@hotmail.com", "1234"
            )
   ';
   $retorno = $conexao->exec($query);
   echo $retorno;
    // excluindo a tabela criada no banco de dados
   $query = '
        delete from tb_usuarios
   ';
   $retorno = $conexao->exec($query);
   echo $retorno;
    } catch(PDOException $e){
    echo 'Erro:' . $e->getCode(). 'Mensagem'. $e->getMessage();
    //registrar erro
   }
?>