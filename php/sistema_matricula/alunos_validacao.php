<?php
#Nome do arquivo: alunos_validacao.php
#Objetivo: valida o formulário para inclusão/alteração de alunos

$nome = $_POST['nome']; 
$idade = $_POST['idade']; 
$estrangeiro = $_POST['estrangeiro']; 
$idCurso = $_POST['curso']; 

if(empty(trim($nome))) {
   echo "Informe o nome do aluno.";
   exit;
}

if(empty(trim($idade))) {
   echo "Informe a idade do aluno.";
   exit;
}

//Validar se a idade é numérica
if( (! is_numeric($idade)) || intval($idade) <= 0) {
   echo "A idade deve ser maior que 0.";
   exit;
}

if(empty(trim($estrangeiro))) {
   echo "Informe se o aluno é estrangeiro.";
   exit;
}

if(empty(trim($idCurso))) {
   echo "Informe o curso do aluno.";
   exit;
}

//Validar se o curso é numérico
if( (! is_numeric($idCurso)) || intval($idCurso) <= 0) {
   echo "Selecione um curso válido.";
   exit;
}

//Retorna vazio para indicar sucesso na validação
echo "";

?>