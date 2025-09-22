<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}
require_once __DIR__ . '/../config/conexao.php';
require_once __DIR__ . '/../src/controller/ProdutoController.php';

$controller = new ProdutoController($conn);

// Pegando o ID do produto pela URL
$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID inválido!");
}

$produto = $controller->buscarProduto($id);

// Se enviou o formulário para atualizar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->excluirProduto($id);
    header("Location: index.php?msg=excluido");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/create/estiloCreate.css">
    <link rel="stylesheet" href="assets/css/delete/estiloDelete.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Excluir Produto</title>
</head>

<body>
    <div class="create-form-wraper">
        <form method="POST">
            <div class="form-header">
                <img src="assets/icons/delete-product-form.svg" alt="add-box" class="icon">
                <h2>Excluir Produto</h2>
            </div>
            <br>
            <hr>
            <br>
            <label for="nome">Nome</label>
            <input disabled type="text" name="nome" id="nome" value="<?= htmlspecialchars($produto['nome_produto']) ?>">

            <div class="content-group">
                <div>
                    <label for="preco">Preço</label>
                    <input disabled ="number" name="preco" id="preco" value="<?= htmlspecialchars($produto['preco_produto']) ?>">
                </div>

                <div>
                    <label for="quantidade">Quantidade</label>
                    <input disabled type="number" name="quantidade" value="<?= htmlspecialchars($produto['quantidade_produto']) ?>">
                </div>

                <div>
                    <label for="SKU">SKU</label>
                    <input disabled type="text" name="sku" value="<?= htmlspecialchars($produto['sku_produto']) ?>">
                </div>

                <div>
                    <label for="fornecedor">Fornecedor</label>
                    <input disabled type="text" name="fornecedor" value="<?= htmlspecialchars($produto['fornecedor_produto']) ?>">
                </div>
            </div>

            <label for="descricao">Descrição</label>
            <textarea disabled name="descricao"></textarea>

            <div class="confirm-delete">
                <span>Deseja excluir o produto acima?</span>
            </div>

            <div class="buttons">
                <a href="http://localhost/desafio-avanti/public/">Cancelar</a>
                <input type="submit" value="Excluir">
            </div>

        </form>
    </div>
</body>

</html>