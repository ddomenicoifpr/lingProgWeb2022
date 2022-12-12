<?php
#Classe auxiliar para criar componentes HTML de Aluno

class AlunoHTML {

    public static function desenhaTabela($alunos) {
        echo "<table class='table table-striped table-bordered'>";
        
        echo "<thead>";
        echo "<th scope='col'>Nome</th>";
        echo "<th scope='col'>Idade</th>";
        echo "<th scope='col'>Estrangeiro</th>";
        echo "<th scope='col'>Curso</th>";
        echo "<th scope='col'>Alterar</th>";
        echo "<th scope='col'>Excluir</th>";
        echo "</thead>";
        
        echo "<tbody>";
        foreach ($alunos as $aluno):
            echo "<tr>";
            echo "<td>". $aluno->getNome() ."</td>";
            echo "<td>". $aluno->getIdade() ."</td>";
            //echo "<td>". $aluno->getEstrangeiro() ."</td>";
            echo "<td>". $aluno->getEstrangeiroTexto() ."</td>";
            echo "<td>". $aluno->getCurso()->getNome() ."</td>";
            
            //Editar
            echo "<td>". 
                "<a href='alunos_alt.php?id=". $aluno->getIdAluno() . "'>".
                "<img src='img/btn_editar.png'>" . "</a>".
            "</td>";
            
            //Excluir
            echo "<td>". 
                "<a href='alunos_del_exec.php?id=". $aluno->getIdAluno() . 
                "' onclick='return confirm(\"Confirma a exclusão do aluno?\");'".
                ">".
                "<img src='img/btn_excluir.png'>" . "</a>".
            "</td>";
            
            echo "</tr>";
        endforeach;
        echo "</tbody>";

        echo "</table>";
    }

}
?>