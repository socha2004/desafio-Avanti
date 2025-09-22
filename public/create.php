<?php 
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

require_once __DIR__ . '/../config/conexao.php';
require_once __DIR__ . '/../src/controller/ProdutoController.php';

$controller = new ProdutoController($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome  = $_POST['nome'] ?? '';
    $preco = $_POST['preco'] ?? '';
    $quantidade = $_POST['quantidade'] ?? '';
    $sku = $_POST['sku'] ?? '';
    $fornecedor = $_POST['fornecedor'] ?? '';
    $descricao = $_POST['descricao'] ?? '';

    if ($controller->criarProduto($nome, $preco, $quantidade, $sku, $fornecedor, $descricao)) {
       echo $descricao;
        // header("Location: index.php?msg=criado");
        exit;
    } else {
        echo "<p style='color:red'>Erro ao atualizar</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/create/estiloCreate.css">
    <link rel="stylesheet" href="assets/css//estilo.css">
    <title>Criar Produto</title>
</head>

<body>
    <div class="create-form-wraper">
        <form method="POST">
            <div class="form-header">
                <img src="assets/icons/add-box.svg" alt="add-box" class="icon">
                <h2>Cadastrar Produto</h2>
            </div>
            <hr>
            <br>
            <label for="nome">Nome</label>
            <input type="text" name="nome" required>

                <div class="content-group">
                    <div>
                        <label for="preco">Preço</label>
                        <input type="number" name="preco" id="preco" step="0.01" min="0" required>
                    </div>

                    <div>
                        <label for="quantidade">Quantidade</label>
                        <input type="number" name="quantidade"  min="0" required>
                    </div>

                    <div>
                        <label for="SKU">SKU</label>
                        <input type="text" name="sku" required>
                    </div>

                    <div>
                        <label for="fornecedor">Fornecedor</label>
                        <input type="text" name="fornecedor" required>
                    </div>
                </div>

            <label for="textarea">Descrição</label>
            <textarea name="descricao"></textarea>

            <div class="buttons">
                <a href="http://localhost/desafio-avanti/public/">Cancelar</a>   
                <input type="submit" value="Enviar">
            </div>
           
        </form>
    </div>
</body>

</html>