<?php
#Arquivo para processar a requisição POST do login

$login = trim($_POST['login']);
$senha = trim($_POST['senha']);

//Validações
if(empty($login)) {
    echo "Informe o login do usuário.";
    exit;
}

if(empty($senha)) {
    echo "Informe a senha do usuário.";
    exit;
}

//Validar o login e senha

echo $login . " - " . $senha;

?>