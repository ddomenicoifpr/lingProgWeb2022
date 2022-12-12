<?php
#Arquivo com a declaração da classe Aluno

class Aluno {

    private $idAluno;
    private $nome;
    private $idade;
    private $estrangeiro;
    private $curso;

    /**
     * Get the value of idAluno
     */ 
    public function getIdAluno()
    {
        return $this->idAluno;
    }

    /**
     * Set the value of idAluno
     *
     * @return  self
     */ 
    public function setIdAluno($idAluno)
    {
        $this->idAluno = $idAluno;

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

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of estrangeiro
     */ 
    public function getEstrangeiro()
    {
        return $this->estrangeiro;
    }

    //Exibe a informação de estrangeiro no formato Sim/Não
    public function getEstrangeiroTexto() 
    {
        if($this->estrangeiro == 'S') {
            return "Sim";
        } elseif($this->estrangeiro == 'N')
            return "Não";

        return "Inválido";
    }

    /**
     * Set the value of estrangeiro
     *
     * @return  self
     */ 
    public function setEstrangeiro($estrangeiro)
    {
        $this->estrangeiro = $estrangeiro;

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

?>