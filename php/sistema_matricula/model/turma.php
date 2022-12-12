<?php
#Classe Model para Turma

class Turma implements JsonSerializable {
    private $idTurma;
    private $codDisciplina;
    private $nomeDisciplina;
    private $ano;
    private $curso;

    public function jsonSerialize() {
        return 
        [
            'idTurma' => $this->idTurma,
            'codDisciplina' => $this->codDisciplina,
            'nomeDisciplina' => $this->nomeDisciplina,
            'ano' => $this->ano,
            'curso' => $this->curso
        ];
    }

    /**
     * Get the value of idTurma
     */ 
    public function getIdTurma()
    {
        return $this->idTurma;
    }

    /**
     * Set the value of idTurma
     *
     * @return  self
     */ 
    public function setIdTurma($idTurma)
    {
        $this->idTurma = $idTurma;

        return $this;
    }

    /**
     * Get the value of codDisciplina
     */ 
    public function getCodDisciplina()
    {
        return $this->codDisciplina;
    }

    /**
     * Set the value of codDisciplina
     *
     * @return  self
     */ 
    public function setCodDisciplina($codDisciplina)
    {
        $this->codDisciplina = $codDisciplina;

        return $this;
    }

    /**
     * Get the value of nomeDisciplina
     */ 
    public function getNomeDisciplina()
    {
        return $this->nomeDisciplina;
    }

    /**
     * Set the value of nomeDisciplina
     *
     * @return  self
     */ 
    public function setNomeDisciplina($nomeDisciplina)
    {
        $this->nomeDisciplina = $nomeDisciplina;

        return $this;
    }

    /**
     * Get the value of ano
     */ 
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     *
     * @return  self
     */ 
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

}
