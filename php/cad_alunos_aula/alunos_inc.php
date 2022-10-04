<?php
#Página com o formulário para incluir um aluno

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

    <form name="frmCadastroAlunos">
        <table>
            <tr>
                <td> <span>Nome:</span> </td>
                <td> <input type="text" name="nome_aluno" size="45" maxlength="70" /> </td>
            </tr>
            <tr>
                <td> <span>Idade:</span> </td>
                <td> <input type="text" name="idade_aluno" size="3" maxlength="3"/> </td>
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
                        //Implentar consulta no banco

                        //Percorrer os resultados

                        //Select com as opções as opções de curso 
                    ?>
                </td>
            </tr>
        </table>


    </form>
</body>
</html>