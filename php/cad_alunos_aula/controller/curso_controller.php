<?php
#Classe de controller para Curso

include_once("dao/curso_dao.php");

class CursoController {

    public function listar() {
        $cursoDAO = new CursoDAO();
        return $cursoDAO->list();
    }

}

?>