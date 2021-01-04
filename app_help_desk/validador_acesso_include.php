<?php
  //seções podem ser compartilhadas entre páginas
  session_start();
  //teste que irá verificar se existe alguma autentificação sendo feita, e caso exista e ela seja diferente do valor SIM irá haver um redirecionamento
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    header('Location: index.php?login=erro2');
  } 
?>