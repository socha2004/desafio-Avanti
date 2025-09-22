<?php
require_once __DIR__ . "/../../config/conexao.php";

class Usuario
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function autenticar($login, $senha)
    {
        $sql = "SELECT * FROM usuario WHERE login_usuario = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$login]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario['senha_usuario'])) {
            return $usuario;
        }
        return false;
    }
}
