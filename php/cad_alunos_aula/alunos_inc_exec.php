<?php
#Arquivo para executar a inclusão de um Aluno

include_once("model/aluno.php");
include_once("model/curso.php");
include_once("controller/aluno_controller.php");

//Capturar os valores orindos do formulário
$nome = $_POST["nome_aluno"];
$idade = $_POST['idade_aluno'];
$estrangeiro = $_POST['estrangeiro_aluno'];
$id_curso = $_POST['curso_aluno'];

//Criar o objeto Aluno
$aluno = new Aluno();
$aluno->setNome($nome);
$aluno->setIdade($idade);
$aluno->setEstrangeiro($estrangeiro);

$curso = new Curso($id_curso);
$aluno->setCurso($curso);

//Chamar o controler para salvar o aluno
$alunoCont = new AlunoController();
$alunoCont->salvar($aluno);

//Redireciona para o início
header("location: alunos_listar.php");

?>