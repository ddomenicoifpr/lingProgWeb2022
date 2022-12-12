<?php
#Classe auxiliar para criar componentes HTML de Cursos

class CursoHTML {

    public static function desenhaSelect($cursos, $name, $id, $idCursoSelec=0) {
        echo "<select class='form-control' name='". $name ."' id='". $id ."'>";

        foreach($cursos as $curso):
            echo "<option value='" .$curso->getIdCurso(). "'";

            if($curso->getIdCurso() == $idCursoSelec)
                echo " selected ";

            echo ">". $curso->getNome()."</option>";
        endforeach;

        echo "</select>";
    }

}

?>