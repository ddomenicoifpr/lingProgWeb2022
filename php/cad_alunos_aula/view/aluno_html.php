<?php
#Classe auxiliar para criar componentes HTML de Aluno

class AlunoHTML {

    public static function desenhaTabela($alunos) {
        echo "<table border='1'>";
        
        echo "<thead>";
        echo "<th scope='col'>Nome</th>";
        echo "<th scope='col'>Idade</th>";
        echo "<th scope='col'>Estrangeiro</th>";
        echo "<th scope='col'>Curso</th>";
        echo "<th scope='col'></th>";
        echo "<th scope='col'></th>";
        echo "</thead>";
        
        echo "<tbody>";
        foreach ($alunos as $aluno):
            echo "<tr>";
            echo "<td>". $aluno->getNome() ."</td>";
            echo "<td>". $aluno->getIdade() ."</td>";
            //echo "<td>". $aluno->getEstrangeiro() ."</td>";
            echo "<td>". $aluno->getEstrangeiroTexto() ."</td>";
            echo "<td>". $aluno->getCurso()->getNome() ."</td>";
            
            echo "<td>". 
                "<a href='alunos_alt.php?id=". $aluno->getIdAluno() . "'>".
                "Editar" . "</a>".
            "</td>";
            
            echo "<td>". "Excluir" ."</td>";
            
            echo "</tr>";
        endforeach;
        echo "</tbody>";

        echo "</table>";
    }

}
?>