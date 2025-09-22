<?php
require_once __DIR__ . "/../../config/conexao.php";

class Produto
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function todos()
    {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function selecionaPorID($id)
    {
        $sql = "SELECT * FROM produtos WHERE id_produto = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function criar($nome, $preco, $quantidade, $sku, $fornecedor, $descricao)
    {
        $sql = "INSERT INTO produtos (nome_produto, preco_produto, quantidade_produto, sku_produto, fornecedor_produto, descricao_produto) 
            VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nome, $preco, $quantidade, $sku, $fornecedor, $descricao]);
    }

    public function atualizar($id, $nome, $preco, $quantidade, $sku, $fornecedor, $descricao)
    {
        $sql = "UPDATE produtos SET 
        nome_produto=?, 
        preco_produto=?, 
        quantidade_produto=?, 
        sku_produto=?, 
        fornecedor_produto=?, 
        descricao_produto=?
        WHERE id_produto=?";

        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nome, $preco, $quantidade, $sku, $fornecedor, $descricao, $id]);
    }

    public function deletar($id)
    {
        $sql = "DELETE FROM produtos WHERE id_produto = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
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
