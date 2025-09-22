<?php
require_once __DIR__ . ("/../model/Usuario.php");

class UsuarioController
{
    private $usuario;

    public function __construct($db)
    {
        $this->usuario = new Usuario($db);
    }

    public function login($login, $senha)
    {
        $usuario = $this->usuario->autenticar($login, $senha);
        if ($usuario) {
            $_SESSION['usuario_id'] = $usuario['id_usuario'];
            $_SESSION['usuario_login'] = $usuario['login_usuario'];
            return true;
        }
        return false;
    }

    public function logout()
    {
        session_destroy();
        header("Location: login.php");
        exit;
    }
}
