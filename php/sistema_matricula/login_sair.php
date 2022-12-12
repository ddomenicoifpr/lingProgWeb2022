<?php
#Página que executa a ação de deslogar (sair) para o usuário

//Habilitar o recurso de sessão no PHP nesta página
session_start();

//Destroi a sessão 
session_destroy();

header("location: login.php");
?>