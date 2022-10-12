<?php
#Classe auxiliar para criar componentes HTML de Cursos

class CursoHTML {

    public static function desenhaSelect($cursos, $name) {
        echo "<select name='". $name ."'>";

        foreach($cursos as $curso):
            echo "<option value='" .$curso->getIdCurso(). "'>". 
                $curso->getNome()."</option>";
        endforeach;

        echo "</select>";
    }

}

?>