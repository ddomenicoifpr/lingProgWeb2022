<?php
#Classe DAO para o model de Usuario

include_once("util/conexao.php");
include_once("model/usuario.php");

class UsuarioDAO {

    public function findByLoginSenha($login, $senha) {
        $conn = conectar_db();

        $sql = "SELECT * FROM usuarios u" .
               " WHERE u.login = ? AND u.senha = ?";
        $stm = $conn->prepare($sql);    
        $stm->execute([$login, $senha]);
        $result = $stm->fetchAll();

        $usuarios = array();
        foreach ($result as $reg):
            $usuario = new Usuario();
            $usuario->setIdUsuario($reg['id_usuario']);
            $usuario->setNome($reg['nome']);
            $usuario->setLogin($reg['login']);
            $usuario->setSenha($reg['senha']);
            array_push($usuarios, $usuario);
        endforeach;

        if(count($usuarios) == 1)
            return $usuarios[0];
        elseif(count($usuarios) == 0)
            return null;

        die("UsuarioDAO.findByLoginSenha()" . 
            " - Erro: mais de um usuário encontrado.");
    }

}


?>