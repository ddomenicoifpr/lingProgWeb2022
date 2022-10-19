<?php
#Página com o formulário para incluir um aluno

include_once("controller/curso_controller.php");
include_once("view/curso_html.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE CADASTRO DE ALUNOS</title>
</head>
<body>
    <center><h1 style="color: green;">SISTEMA DE CADASTRO DE ALUNOS</h1></center>

    <br><h4>Informe os dados para inserir um aluno:</h4>

    <form name="frmCadastroAlunos" method="POST" action="alunos_inc_exec.php">
        <table>
            <tr>
                <td> <span>Nome:</span> </td>
                <td> <input type="text" name="nome_aluno" size="45" maxlength="70" /> </td>
            </tr>
            <tr>
                <td> <span>Idade:</span> </td>
                <td> <input type="number" name="idade_aluno" style="width: 50px;"/> </td>
            </tr>    

            <tr>
                <td> <span>Estrangeiro:</span> </td>
                <td>
                    <select name="estrangeiro_aluno">
                        <option value="S">Sim</option>
                        <option value="N">Não</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td> <span>Curso:</span> </td>
                <td> 
                    <?php
                        $cursoCont = new CursoController();
                        $cursos = $cursoCont->listar();

                        CursoHTML::desenhaSelect($cursos, "curso_aluno");
                    ?>
                </td>
            </tr>
        </table>

        <br>
        <button type="submit">Gravar</button>
        <button type="reset">Limpar</button>
    </form>

    <br>
    <a href="index.php">Voltar</a>
</body>
</html>