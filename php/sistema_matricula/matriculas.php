<?php
#Interface para matricular um Aluno em uma Turma

//Verificação de usuário logado
include_once("login_verifica.php");

include_once("controller/aluno_controller.php");

//Caputar o valor da variável GET
$id = $_GET['id']; //Receber o código do aluno para as matrículas

//Buscar o aluno
$alunoCont = new AlunoController();
$aluno = $alunoCont->buscarPorId($id);

if($aluno == NULL) { //Se não existe o aluno
   echo "Aluno não encontrado. <br>";
   echo "<a href='alunos_listar.php'>Voltar</a>";
   exit;
}
?>

<!DOCTYPE HTML>
<html>
<head>
   <?php include_once("bootstrap/head.php"); ?>
</head>

<body>
   <?php include_once("bootstrap/menu.php"); ?>   

   <h3 class="text-center">MATRICULAR ALUNO</h3>

   <br>
   
   <div class="container">
      <dl class="row">
         <dt class="col-sm-2">Nome: </dt>
         <dd class="col-sm-10"><?php echo $aluno->getNome(); ?></dd>

         <dt class="col-sm-2">Idade: </dt>
         <dd class="col-sm-10"><?php echo $aluno->getIdade(); ?></dd>
         
         <dt class="col-sm-2">Estrangeiro: </dt>
         <dd class="col-sm-10"><?php echo $aluno->getEstrangeiroTexto(); ?></dd>

         <dt class="col-sm-2">Curso: </dt>
         <dd class="col-sm-10"><?php echo $aluno->getCurso()->getNome(); ?></dd>
      </dl>

      <div class="row" style="margin-top: 30px;">
         <div class="col-3">
            <form id="frmFiltro" name="formFiltroo">
               <div class="form-group">
                  <label for="somAno">Ano</label>
                  <select id="somAno" name="ano" class="form-control" style="width: 150px;">
                  </select>

                  <input type="hidden" name="idAluno" id="txtIdAluno" value="<?php echo $aluno->getIdAluno(); ?>" />
               </div>
            </form>
         </div>

         <div class="col-9">
            <div class="alert alert-danger" id="divMsgErro" style="display: none;">Teste</div>
         </div>
      </div>

      <div class="row" style="margin-top: 30px;">
         <div class="col-6">
            <p style="font-weight: bold;">Turmas onde o aluno está matriculado</p>

            <table id="tabMatriculado" class='table table-striped table-bordered'>
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Disciplina</th>
                     <th></th>
                  </tr>
               </thead>
            </table>
         </div>

         <div class="col-6">
            <p style="font-weight: bold;">Turmas disponíveis para matrícula</p>

            <table id="tabTurmasDisponiveis" class='table table-striped table-bordered'>
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Disciplina</th>
                     <th></th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>

      <div class="row" style="margin-top: 30px;">
         <div class="col-6">   
            <a class="btn btn-outline-secondary" href="alunos_listar.php"> Voltar </a>
         </div>
      </div>

   </div>

   <?php include_once("bootstrap/footer.php"); ?>
</body>
</html>