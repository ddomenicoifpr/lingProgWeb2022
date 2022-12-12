<?php
#Classe de controller para Usuario

include_once("dao/usuario_dao.php");

class UsuarioController {

    private $usuarioDao;

    public function __construct() {
        $this->usuarioDao = new UsuarioDAO();
    }

    public function buscarPorLoginSenha($login, $senha) {
        return $this->usuarioDao->findByLoginSenha($login, $senha);
    }

}

?>