<?php

/*método responsável por iniciar uma seção tornando o compartilhamento de dados possivel entre
seções */
session_start();

//criação de váriavel para validar que o úsuario está autenticado
$usuario_autenticado = false;

//criação de váriavel que receberá o id o úsuario
$usuario_id = null;

//váriavel que receberá o tipo de perfil do úsuario podendo ser ele de adm ou úsuario comum
$usuario_perfil_id = null;

//crição de array com os tipos de perfil adm e user
$perfil = array(1 => 'Administrativo' , 2 => 'Usuario');

/*Primeiro passo criar os usuarios e atribuilos em um array, tambem foi incluido a criação de uma chave para o id para que possa ser verificado
qual usuario está logado e também a verificação de um id de perfil no qual é possivel dizer se é um úsuario comum ou um administrador.
*/
$usuarios = array(
    array('id' => 1, 'email' => 'smurf455@hotmail.com', 'senha' => '29061989', 'perfil_id' => 1),
    array('id' => 2, 'email' => 'adm@hotmail.com', 'senha' => '29061989', 'perfil_id' => 2),
    array('id' => 3, 'email'=> 'teste@hotmail.com', 'senha' => '123456', 'perfil_id' => 1),
    array('id' => 4, 'email' => 'psbrunosouza@gmail.com', 'senha' =>'123456' ,'perfil_id' => 2)
);

//condição que irá pegar todos os itens do array e verificar se eles correspondem aos itens recebidos através do metodo post 
    foreach($usuarios as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            //caso os valores correspondam o usuario recebe a autenticação
            $usuario_autenticado = true;
            //o usuario id recebe o id da seção atual
            $usuario_id = $user['id'];
            //e o perfil_id irá receber o tipo de id da seção atual
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    //Segundo passo, após o úsuario ser verificado fazer com que a seção possa ser utilizada em outra páginas atráves do session

    if($usuario_autenticado){
        //caso um úsuario seja autenticado uma váriavel de seção autenticado será criada e a ela será atribuido o valor SIM
        $_SESSION['autenticado'] = 'SIM';
        //outra variavel de seção irá receber o valor do id do úsuario
        $_SESSION['id'] = $usuario_id;
        // e outra variavel de seção irá receber o perfil daquele úsuario
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        //e após isso o úsuario será redirecionado para a página home
        header('Location: home.php');
    } else{
        //caso o usuario não seja autenticado ele irá receber um novo location para notificar um erro
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
    }
?>