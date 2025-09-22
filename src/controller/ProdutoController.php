<?php
require_once __DIR__ . '/../model/Produto.php';

class ProdutoController
{
    private $produto;

    public function __construct($db)
    {
        $this->produto = new Produto($db);
    }

    public function listarProdutos()
    {
        return $this->produto->todos();
    }

    public function criarProduto($nome, $preco, $quantidade, $sku, $fornecedor, $descricao)
    {
        return $this->produto->criar($nome, $preco, $quantidade, $sku, $fornecedor, $descricao);
    }

    public function buscarProduto($id)
    {
        return $this->produto->selecionaPorID($id);
    }

    public function atualizarProduto($id, $nome, $preco, $quantidade, $sku, $fornecedor, $descricao)
    {
        if (empty($nome) || empty($preco)) {
            return false;
        }
        return $this->produto->atualizar($id, $nome, $preco, $quantidade, $sku, $fornecedor, $descricao);
    }

    public function excluirProduto($id)
    {
        if (empty($id)) {
            return false;
        }
        return $this->produto->deletar($id);
    }

    public function login($login, $senha)
    {
        $usuario = $this->produto->autenticar($login, $senha);
        if ($usuario) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_login'] = $usuario['login'];
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
