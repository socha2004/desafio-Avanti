<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

require_once __DIR__ . '/../config/conexao.php';
require_once __DIR__ . '/../src/controller/ProdutoController.php';

$controller = new ProdutoController($conn);
$produto = $controller->listarProdutos();
?>

<?php if (isset($_GET['msg']) && $_GET['msg'] === 'editado'): ?>
    <script>
        alert("Produto atualizado com sucesso!");
    </script>
<?php endif; ?>

<?php if (isset($_GET['msg']) && $_GET['msg'] === 'excluido'): ?>
    <script>
        alert("Produto excluído com sucesso!");
    </script>
<?php endif; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css//estilo.css">
    <link rel="stylesheet" href="assets/css/index/estiloIndex.css">

    <title>Dashboard</title>
</head>

<body>
    <header>
        <nav class="header-navbar">
            <div class="title-header">
                <img src="assets/icons/cubes.svg" alt="cubes" class="icon icon-header">
                <h2>Avanti Inventory Management</h2>
            </div>
            <div class="commands-header">
                <div class="status-box">
                    <img src="assets/icons/shield.svg" alt="blocks" class="icon">
                    <span class="connected-info">Conectado</span>
                </div>

                <a href="logout.php"class="logout-button">
                    <img src="assets/icons/logout.svg" alt="logout" class="icon">
                    <span>Sair</span>
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div class="products-header">
            <h1 style="color: #4F4F4F">Produtos</h1>
            <a class="create-button" href="create.php">
                <img src="assets/icons/add.svg" alt="add" class="icon add-product-icon" style="margin-right: 10px;">
                <span class="add-description">Adicionar Produto</span>
            </a>
        </div>
        <div class="table-wraper">
            <table>
                <thead>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th style="text-align: right;">Ações</th>
                </thead>
                <tbody>
                    <?php if (!empty($produto)): ?>
                        <?php foreach ($produto as $p): ?>
                            <tr>
                                <td><?= htmlspecialchars($p['nome_produto']) ?></td>
                                <td><?= htmlspecialchars($p['quantidade_produto']) ?></td>
                                <td>R$ <?= htmlspecialchars($p['preco_produto']) ?></td>
                                <td class="actions">
                                    <a class="table-icon edit" href="update.php?id=<?= $p['id_produto'] ?>">
                                        <img src="assets/icons/edit.svg" alt="edit">
                                        <span>Editar</span>
                                    </a>
                                    <a class="table-icon delete" href="delete.php?id=<?= $p['id_produto'] ?>">
                                        <img src="assets/icons/trash.svg" alt="delete">
                                        <span>Excluir</span>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" style="text-align:center; color:gray; padding:10px;">
                                Sem produtos no estoque.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>