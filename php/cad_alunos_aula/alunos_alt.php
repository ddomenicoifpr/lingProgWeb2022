<?php
#Página com o formulário para alterar um aluno

include_once("controller/aluno_controller.php");
include_once("controller/curso_controller.php");
include_once("view/curso_html.php");

$id = $_GET['id'];

$alunoCont = new AlunoController();
$aluno = $alunoCont->buscarPorId($id);

if($aluno == null) {
    echo "Aluno não encontrado!<br>";
    echo "<a href='alunos_listar.php'>Voltar</a>";
    exit;
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("bootstrap/head.php"); ?>
</head>
<body>
    <?php include_once("bootstrap/menu.php"); ?>

    <h3 class="text-center">ALTERAR ALUNO</h3>

    <div style="max-width: 50%; margin-left: 10px;">
        <form name="frmCadastroAlunos" method="POST" action="alunos_alt_exec.php">
            <div class="form-group">
                <label for="txtNome">Nome:</label>
                <input class="form-control" type="text" id="txtNome" name="nome_aluno" 
                    size="45" maxlength="70" placeholder="Informe o nome"
                    value="<?php echo $aluno->getNome(); ?>" />
            </div>
            <div class="form-group">
                <label for="txtIdade">Idade:</label>
                <input class="form-control" type="number" id="txtIdade" name="idade_aluno" 
                    style="width: 100px;"
                    value="<?php echo $aluno->getIdade(); ?>"/>
            </div>
            <div class="form-group">
                <label for="somEst">Estrangeiro:</label>
                <select class="form-control" id="somEst" name="estrangeiro_aluno">
                    <option value="S" <?php if($aluno->getEstrangeiro() == 'S') echo "selected"; ?> >Sim</option>
                    <option value="N" <?php if($aluno->getEstrangeiro() == 'N') echo "selected"; ?> >Não</option>
                </select>
            </div>    
            <div class="form-group">
                <label for="somCurso">Curso:</label>
                <?php
                    $cursoCont = new CursoController();
                    $cursos = $cursoCont->listar();

                    CursoHTML::desenhaSelect($cursos, "curso_aluno", "somCurso", $aluno->getCurso()->getIdCurso());
                ?>
            </div>

            <input type="hidden" name="id_aluno" value="<?php echo $aluno->getIdAluno(); ?>" />

            <button type="submit" class="btn btn-success">Gravar</button>
        </form>

        <br><br>
        <a class="btn btn-outline-secondary" href="alunos_listar.php">Voltar</a>
    </div>

    <?php include_once("bootstrap/footer.php"); ?>
</body>
</html>