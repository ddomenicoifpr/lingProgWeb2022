<?php
#Lista as turmas disponíveis para o aluno em formato JSON

header('Content-Type: text/html; charset=utf-8');

include_once("controller/aluno_controller.php");
include_once("controller/turma_controller.php");

$idAluno = $_GET['id_aluno']; 
$ano = $_GET['ano']; 

//Carrega os dados do aluno
$alunoCont = new AlunoController();
$aluno = $alunoCont->buscarPorId($idAluno);
if($aluno == null) {
   echo "Falha ao carregar os dados do aluno.";
   exit;
}

//Carrega os dados das turmas
$turmaCont = new TurmaController();
$turmas = $turmaCont->listarPorAnoCurso($ano, $aluno->getCurso()->getIdCurso());

echo json_encode($turmas, JSON_UNESCAPED_UNICODE);

?>
