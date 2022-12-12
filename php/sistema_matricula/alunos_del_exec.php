<?php
#Arquivo para executar a exclusão de um Aluno

include_once("controller/aluno_controller.php");

$idAluno = $_GET["id"];

$alunoCont = new AlunoController();
$aluno = $alunoCont->buscarPorId($idAluno);

if($aluno != null) {
    //Deletar o aluno
    $alunoCont->excluir($aluno);

    //Retornar para a página inicial
    header("location: alunos_listar.php");

} else { 
    echo "O aluno de ID ".$idAluno." não existe.";
    echo "<br>";
    echo "<a href='index.php'>Voltar</a>";
}



?>