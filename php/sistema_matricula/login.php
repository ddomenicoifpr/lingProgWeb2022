<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("bootstrap/head.php"); ?>
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-6">
                <div class="alert alert-info">
                    <h4>Informe os dados para logar:</h4>
                    <br>

                    <!-- Formulário de login -->
                    <form id="frmLogin" name="formLogin" >
                        <div class="form-group">
                            <label for="txtLogin">Login:</label>
                            <input type="text" class="form-control" name="login" id="txtLogin"
                                maxlength="15" />        
                        </div>

                        <div class="form-group">
                            <label for="txtSenha">Senha:</label>
                            <input type="password" class="form-control" name="senha" id="txtSenha"
                                maxlength="15" />        
                        </div>

                        <button type="button" class="btn btn-success" 
                            onclick="logar();">Logar</button>
                    </form>
                </div>
            </div>

            <div class="col-6">
                <div id="divMsgErro" class="alert alert-danger" 
                    style="display: none;">
                    Teste
                </div>
            </div>
        </div>
    </div>


    <?php include_once("bootstrap/footer.php"); ?>

    <script src="js/login.js"></script>
</body>

</html>