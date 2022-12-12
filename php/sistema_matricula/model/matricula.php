<?php
#Classe Model para Matricula

class Matricula implements JsonSerializable {

    private $idMatricula;
    private $aluno;
    private $turma;
    private $data;
    
    public function jsonSerialize() {
        return
        [
            'idMatricula' => $this->idMatricula,
            'aluno' => $this->aluno,
            'turma' => $this->turma,
            'data' => $this->data
        ];
    }

    /**
     * Get the value of idMatricula
     */ 
    public function getIdMatricula()
    {
        return $this->idMatricula;
    }

    /**
     * Set the value of idMatricula
     *
     * @return  self
     */ 
    public function setIdMatricula($idMatricula)
    {
        $this->idMatricula = $idMatricula;

        return $this;
    }

    /**
     * Get the value of aluno
     */ 
    public function getAluno()
    {
        return $this->aluno;
    }

    /**
     * Set the value of aluno
     *
     * @return  self
     */ 
    public function setAluno($aluno)
    {
        $this->aluno = $aluno;

        return $this;
    }

    /**
     * Get the value of turma
     */ 
    public function getTurma()
    {
        return $this->turma;
    }

    /**
     * Set the value of turma
     *
     * @return  self
     */ 
    public function setTurna($turma)
    {
        $this->turma = $turma;

        return $this;
    }

    /**
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

}

?>
