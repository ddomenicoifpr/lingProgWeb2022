<?php
#Classe DAO para o model de Curso

include_once("util/conexao.php");
include_once("model/curso.php");

class CursoDAO {

    public function list() {
        $conn = conectar_db();

        $sql = "SELECT * FROM cursos ORDER BY nome";
        $stm = $conn->prepare($sql);    
        $stm->execute();
        $result = $stm->fetchAll();

        $cursos = array();
        foreach ($result as $reg):
            $curso = 
                new Curso($reg['id_curso'], $reg['nome']);
            array_push($cursos, $curso);
        endforeach;

        return $cursos;
    }

}


?>