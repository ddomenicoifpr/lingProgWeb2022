<?php
#Lista as turmas onde o aluno está matriculado em formato JSON

include_once("controller/aluno_controller.php");
include_once("controller/matricula_controller.php");

$idAluno = $_GET['id_aluno']; 
$ano = $_GET['ano']; 

//Carrega os dados do aluno
$alunoCont = new AlunoController();
$aluno = $alunoCont->buscarPorId($idAluno);
if($aluno == null) {
   echo "Falha ao carregar os dados do aluno.";
   exit;
}

//Carrega as turmas que o aluno está matriculado
$matriculoCont = new MatriculaController();
$matriculas = $matriculoCont->listarPorAlunoAno($idAluno, $ano);

echo json_encode($matriculas, JSON_UNESCAPED_UNICODE);

?>
