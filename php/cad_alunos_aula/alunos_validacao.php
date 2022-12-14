<?php
#Arquivo para processar a requisição de validação de um aluno

$nome = trim($_POST['nome']);
$idade = trim($_POST['idade']);
$estrangeiro = trim($_POST['estrangeiro']);
$curso = trim($_POST['curso']);

//Validar o nome
if(empty($nome)) {
    echo "Informe o nome.";
    exit;
}

//Validar a idade
if(empty($idade)) {
    echo "Informe o idade.";
    exit;
}

//Validar se a idade é numérica e maior que 0
if( (! is_numeric($idade)) || intval($idade) <= 0 ) {
    echo "A idade deve ser um valor maior que 0.";
    exit;
}

//Validar a estrangeiro
if(empty($estrangeiro)) {
    echo "Informe se o aluno é estrangeiro.";
    exit;
}

if($estrangeiro != 'S' && $estrangeiro != 'N') {
    echo "O valor do campo estrangeiro é inválido.";
    exit;
}

//Validar o curso
if(empty($curso)) {
    echo "Informe o curso do aluno.";
    exit;
}

//Retornar a mensagem em branco - Sem erros de validação
echo "";

?>