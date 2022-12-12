<?php
#Inclui o menu da aplicação nas páginas

//Habilitar o recurso de sessão no PHP nesta página
//session_start();  - Comentado, pois este comando já existe no login_verifica.php

$nome = "(Sessão expirada)";
if(isset($_SESSION['usuarioLogadoNome']))
    $nome = $_SESSION['usuarioLogadoNome'];
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(página
                atual)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-
                expanded="false">
                Cadastros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="alunos_listar.php">Alunos</a>
                    <a class="dropdown-item" href="#">Turmas</a>
                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="login_sair.php">Sair</a>
            </li>
        </ul>

        <ul class="navbar-nav mr-left">
            <li class="nav-item active"><?php echo $nome;?></li>
        </ul>
    </div>
</nav>
