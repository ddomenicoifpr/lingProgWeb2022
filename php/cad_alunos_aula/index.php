<?php
include_once("util/conexao.php");

//Teste de conexão
$connection = conectar_db();
print_r($connection);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE CADASTRO DE ALUNOS</title>
</head>

<body>
   <center><h1 style="color: green;">SISTEMA DE CADASTRO DE ALUNOS</h1></center>
   
   <br><br><br><br><br>
   
   <a href="alunos_inc.php">Incluir Novo Aluno</a><br><br><br>
   
   <h4>RELAÇÃO DOS ALUNOS CADASTRADOS</h4>
</body>

</html>
