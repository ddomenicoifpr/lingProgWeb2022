<?php
#Classe de controller para Aluno

include_once("dao/aluno_dao.php");

class AlunoController {

    private $alunoDAO;

    public function __construct() {
        $this->alunoDAO = new AlunoDAO();
    }

    public function listar() {
        return $this->alunoDAO->list();
    }

    public function salvar($aluno) {
        $this->alunoDAO->save($aluno);
    }
}

?>