<?php
#Insere uma matrícula

include_once("controller/matricula_controller.php");

$idAluno = $_POST['id_aluno']; 
$idTurma = $_POST['id_turma']; 

$matriculaCont = new MatriculaController();

//Verificar se a matricula já existe (Aluno e Turma)
$matricula = $matriculaCont->bucarPorAlunoTurma($idAluno, $idTurma);
if($matricula != null) {
   echo "O aluno já está matriculado na turma com ID " . $idTurma . ".";
   exit;
}

//Inserir a matrícula
$matricula = new Matricula();

$aluno = new Aluno();
$aluno->setIdAluno($idAluno);
$matricula->setAluno($aluno);

$turma = new Turma();
$turma->setIdTurma($idTurma);
$matricula->setTurna($turma);

$matriculaCont->salvar($matricula);

?>
