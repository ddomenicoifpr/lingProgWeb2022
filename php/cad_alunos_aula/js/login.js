//Arquivo com as funcionalides de login

function logar() {
    var login = document.getElementById("txtLogin").value;
    var senha = document.getElementById("txtSenha").value;

    //Preparar a requisição POST
    var dados = new FormData();
    dados.append("login", login);
    dados.append("senha", senha);

    //Criar a requisição
    var url = "login_exec.php"
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", url, false);

    //Enviar a requisição
    xhttp.send(dados);

    var retorno = xhttp.responseText;

    var divErro = document.getElementById("divMsgErro");
    divErro.innerHTML = retorno;
    divErro.style.display = "block";
}