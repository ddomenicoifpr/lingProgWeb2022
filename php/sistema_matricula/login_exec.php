<?php
#Arquivo para processar a requisição POST do login

include_once("controller/usuario_controller.php");

//Habilitar o recurso de sessão no PHP nesta página
session_start();

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
$usuarioCont = new UsuarioController();
$usuario = $usuarioCont->buscarPorLoginSenha($login, $senha);

//Se o usuário for NULL, indica que o login ou a senha estão errados
if($usuario == null) {
    echo "Login ou senha inválidos.";
    exit;
}

//###### Login ocorreu com sucesso ########
//Setar usuário na sessão do PHP
$_SESSION['usuarioLogadoId']   = $usuario->getIdUsuario();
$_SESSION['usuarioLogadoNome'] = $usuario->getNome();

//Retornar a mensagem em branco
echo "";

?>