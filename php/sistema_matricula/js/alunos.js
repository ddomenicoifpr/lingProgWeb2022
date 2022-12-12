/* JavaScript para a interface de alunos */

function validarDadosForm() {
    var nome = document.getElementById('txtNome').value;
    var idade = document.getElementById('txtIdade').value;
    var estrangeiro = document.getElementById('somEst').value;
    var curso = document.getElementById('somCurso').value;

    //Criar o FormData para envio de dados via post
    var dados = new FormData();
    dados.append('nome', nome);
    dados.append('idade', idade);
    dados.append('estrangeiro', estrangeiro);
    dados.append('curso', curso);

    //Criar a requisição AJAX
    var url = 'alunos_validacao.php';
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", url, false);
    xhttp.send(dados);

    var retorno = xhttp.responseText;
    //console.log(retorno);    

    if(retorno != '') {
        var divErro = document.getElementById('divErro');
        divErro.innerHTML = retorno;
        divErro.style.display = 'block';

        return false;
    }

    //Validação correta
    return true;
}