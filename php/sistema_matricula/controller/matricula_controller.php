<?php
#Classe controller para Matricula

include_once("dao/matricula_dao.php");

class MatriculaController {

    private $matriculaDao;

    public function __construct()
    {
        $this->matriculaDao = new MatriculaDAO();
    }

    public function listarPorAlunoAno($idAluno, $ano) {
        return $this->matriculaDao->listByAlunoAno($idAluno, $ano);
    }
    
    public function bucarPorAlunoTurma($idAluno, $idTurma) {
        return $this->matriculaDao->findByAlunoTurma($idAluno, $idTurma);
    }

    public function salvar($matricula) {
        return $this->matriculaDao->save($matricula);
    } 

    public function deletarPorId($idMatricula) {
        return $this->matriculaDao->deleteById($idMatricula);
    } 

}

?>
