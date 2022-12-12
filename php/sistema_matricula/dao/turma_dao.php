<?php
#Classe DAO para o modelo Turma

include_once("util/conexao.php");
include_once("model/curso.php");
include_once("model/turma.php");

class TurmaDAO{

    private const SQL_TURMA = "SELECT t.*, c.nome AS nome_curso FROM turmas t". 
                              " JOIN cursos c ON c.id_curso = t.id_curso"; 

    public function mapTurmas($resultSql){
        $turmas = array();
        foreach ($resultSql as $reg):
            $turma = new Turma();
            $turma->setIdTurma($reg['id_turma']);
            $turma->setCodDisciplina($reg['codigo_disciplina']);
            $turma->setNomeDisciplina($reg['nome_disciplina']);
            $turma->setAno($reg['ano']);
            $curso = new Curso($reg['id_curso'], $reg['nome_curso']);
            $turma->setCurso($curso);

            array_push($turmas, $turma);
        endforeach;

        return $turmas;
    }
    
    public function listByAnoCurso($ano, $idCurso) {
        $conn = conectar_db();

        $sql = TurmaDAO::SQL_TURMA . 
            " WHERE t.ano = ? AND t.id_curso = ?" .
            " ORDER BY t.nome_disciplina";
        $stm = $conn->prepare($sql);    
        $stm->execute([$ano, $idCurso]);
        $result = $stm->fetchAll();

        return $this->mapTurmas($result);
    }

    public function list(){
        $conn = conectar_db();

        $sql = TurmaDAO::SQL_TURMA . " ORDER BY t.nome_disciplina";
        $stm = $conn->prepare($sql);    
        $stm->execute();
        $result = $stm->fetchAll();

        return $this->mapTurmas($result);
    }

    public function listAnosTurmas() {
        return [];
    }

    public function findById($idTurma){
        $conn = conectar_db();

        $sql = TurmaDAO::SQL_TURMA . 
                " WHERE t.id_turma = ?";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$idTurma]);
        $result = $stmt->fetchAll();

        //Criar os objetos Turma
        $turmas = $this->mapTurmas($result);

        if(count($turmas) == 1)
            return $turmas[0];
        elseif(count($turmas) == 0)
            return null;

        die("TurmaDAO.findById - Erro: mais de uma turma".
                " encontrado para o ID ".$idTurma);
    }
    public function save(Turma $turma){
        $conn = conectar_db();

        $sql = "INSERT INTO turmas (codigo_disciplina, nome_disciplina, ano, id_curso)".
            " VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$turma->getCodDisciplina(), $turma->getNomeDisciplina(), 
                        $turma->getAno(), $turma->getCurso()->getIdCurso()]);
    }

    public function update(Turma $turma){
        $conn = conectar_db();

        $sql = "UPDATE turmas SET codigo_disciplina = ?, nome_disciplina = ?, ano = ?, id_curso = ? WHERE id_turma = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$turma->getCodDisciplina(), $turma->getNomeDisciplina(), 
                        $turma->getAno(), $turma->getCurso()->getIdCurso(), $turma->getIdTurma()]);
    }
    
    public function delete(Turma $turma){
        $conn = conectar_db();

        $sql = "DELETE FROM turmas WHERE id_turma = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$turma->getIdTurma()]);
    }

}
