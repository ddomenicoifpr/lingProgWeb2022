<?php
#Arquivo com a declaração da classe Curso

class Curso {

    private $idCurso;
    private $nome;

    //Construtor da classe
    public function __construct($id, $nome="")
    {
        $this->idCurso = $id;
        $this->nome = $nome;
    }
   
    /**
     * Get the value of idCurso
     */ 
    public function getIdCurso()
    {
        return $this->idCurso;
    }

    /**
     * Set the value of idCurso
     *
     * @return  self
     */ 
    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}

?>