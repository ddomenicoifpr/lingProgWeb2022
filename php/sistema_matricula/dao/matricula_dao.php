<?php
#Classe DAO para o modelo Matricula

include_once("util/conexao.php");
include_once("model/matricula.php");
include_once("model/aluno.php");
include_once("model/turma.php");

class MatriculaDAO {

    private const SQL_MATRICULA = "SELECT m.id_matricula, m.data," . 
                                            " m.id_aluno, a.nome, a.idade, a.estrangeiro," . 
                                            " m.id_turma, t.codigo_disciplina, t.nome_disciplina, t.ano" . 
                                        " FROM matriculas m" . 
                                            " JOIN alunos a ON a.id_aluno = m.id_aluno" . 
                                            " JOIN turmas t ON t.id_turma = m.id_turma"; 

    private function mapMatriculas($resultSql){
        $matriculas = array();
        foreach ($resultSql as $reg):
            $matricula = new Matricula();
            $matricula->setIdMatricula($reg['id_matricula']);
            $matricula->setData($reg['data']);
            
            //Seta o aluno na matricula
            $aluno = new Aluno();
            $aluno->setIdAluno($reg['id_aluno']);
            $aluno->setNome($reg['nome']);
            $aluno->setIdade($reg['idade']);
            $aluno->setEstrangeiro($reg['estrangeiro']);
            $matricula->setAluno($aluno);
            
            //Seta a turma na matricula            
            $turma = new Turma();
            $turma->setIdTurma($reg['id_turma']);
            $turma->setCodDisciplina($reg['codigo_disciplina']);
            $turma->setNomeDisciplina($reg['nome_disciplina']);
            $turma->setAno($reg['ano']);
            $matricula->setTurna($turma);

            array_push($matriculas, $matricula);
        endforeach;

        return $matriculas;
    }
    
    public function listByAlunoAno($idAluno, $ano) {
        $conn = conectar_db();

        $sql = MatriculaDAO::SQL_MATRICULA . 
            " WHERE m.id_aluno = ? and t.ano = ?" .
            " ORDER BY t.nome_disciplina";
        $stm = $conn->prepare($sql);    
        $stm->execute([$idAluno, $ano]);
        $result = $stm->fetchAll();

        return $this->mapMatriculas($result);
    }

    public function findByAlunoTurma($idAluno, $idTurma) {
        $conn = conectar_db();

        $sql = MatriculaDAO::SQL_MATRICULA . 
            " WHERE m.id_aluno = ? AND m.id_turma = ? ";
        $stm = $conn->prepare($sql);    
        $stm->execute([$idAluno, $idTurma]);
        $result = $stm->fetchAll();

        $matriculas = $this->mapMatriculas($result);
        if(count($matriculas) == 1)
            return $matriculas[0];
        elseif(count($matriculas) == 0)
            return null;

        die("MatriculaDAO::findByAlunoTurma() - Erro: mais de uma matrícula encontrada para o aluno " . 
                        $idAluno . " e turma " . $idTurma);
    }

    public function save(Matricula $matricula) {
        $conn = conectar_db();

        $sql = "INSERT INTO matriculas (id_aluno, id_turma, data)".
                " VALUES (?, ?, now())";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$matricula->getAluno()->getIdAluno(), $matricula->getTurma()->getIdTurma()]);
    }

    public function deleteById($idMatricula){
        $conn = conectar_db();

        $sql = "DELETE FROM matriculas WHERE id_matricula = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$idMatricula]);
    }

}
