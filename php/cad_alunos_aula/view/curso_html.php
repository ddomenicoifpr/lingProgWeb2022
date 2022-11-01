<?php
#Classe auxiliar para criar componentes HTML de Cursos

class CursoHTML {

    public static function desenhaSelect($cursos, $name, $id) {
        echo "<select class='form-control' name='". $name ."' id='". $id ."'>";

        foreach($cursos as $curso):
            echo "<option value='" .$curso->getIdCurso(). "'>". 
                $curso->getNome()."</option>";
        endforeach;

        echo "</select>";
    }

}

?>