<?php
 include "menu.php";
 echo '<hr>';
 //INCLUDE recupera o script de outra página e caso não encontre ele emite um alerta porém 
 //continua a execução dos scripts da página atual

 //REQUIRE também recupera scripts de outras páginas porém emite um fatal error o que faz com que
 //todos os scripts da página sejam parados caso a página solicitada não seja encontrada.

 //esses métodos podem ser utilizados com o _once caso haja necessidade de uma única execução.
?>

BEM VINDO A HOME