<?php
#Arquivo: conexao.php
#Finalidade: criar uma conexão com a base de dados

/*Verificar as variáveis globais abaixo para configurar 
a conexão com o banco de dados compatível com a sua máquina*/
$HOST = "mysql-server";
$NOME_BANCO = "aula_php";

$USUARIO = "root";
$SENHA = "root";

function conectar_db() {
    global $HOST, $NOME_BANCO, $USUARIO, $SENHA;

    $options = array();

    $str_conn = "mysql:host=" .$HOST. ";dbname=" .$NOME_BANCO;
    $conn =
        new PDO($str_conn,
            $USUARIO, $SENHA, $options);

    return $conn;
}

?>
