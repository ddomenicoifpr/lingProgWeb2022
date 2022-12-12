<?php
#Deleta uma matrícula

include_once("controller/matricula_controller.php");

$idMatricula = $_POST['id_matricula']; 

$matriculaCont = new MatriculaController();

//Deletar a matrícula
$matriculaCont->deletarPorId($idMatricula);

?>
