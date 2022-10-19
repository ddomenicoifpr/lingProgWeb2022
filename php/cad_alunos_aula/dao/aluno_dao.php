<?php
#Classe DAO para o model de Aluno

include_once("util/conexao.php");
include_once("model/curso.php");
include_once("model/aluno.php");

class AlunoDAO {

    public function list() {
        $conn = conectar_db();

        $sql = "SELECT a.*, c.nome AS nome_curso FROM alunos a". 
               " JOIN cursos c ON c.id_curso = a.id_curso";
        $stm = $conn->prepare($sql);    
        $stm->execute();
        $result = $stm->fetchAll();

        $alunos = array();
        foreach ($result as $reg):
            $aluno = new Aluno();
            $aluno->setIdAluno($reg['id_aluno']);
            $aluno->setNome($reg['nome']);
            $aluno->setIdade($reg['idade']);
            $aluno->setEstrangeiro($reg['estrangeiro']);

            $curso = new Curso($reg['id_curso'], $reg['nome_curso']);
            $aluno->setCurso($curso);
            array_push($alunos, $aluno);
        endforeach;

        return $alunos;
    }

    public function save(Aluno $aluno) {
        $conn = conectar_db();

        $sql = "INSERT INTO alunos (nome, idade, estrangeiro, id_curso)".
            " VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$aluno->getNome(), $aluno->getIdade(), 
                        $aluno->getEstrangeiro(), $aluno->getCurso()->getIdCurso()]);
    }
    
}

?>