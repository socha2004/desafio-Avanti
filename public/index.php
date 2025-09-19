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

                <img src="assets/icons/shield.svg" alt="blocks" class="icon">
                <span class="connected-info">Conectado</span>

                <img src="assets/icons/logout.svg" alt="logout" class="icon">
                <span>Sair</span>

            </div>
        </nav>
    </header>
    <main>
        <div class="products-header">
            <h1 style="color: #4F4F4F">Produtos</h1>
            <button class="create-button">
                <img src="assets/icons/add.svg" alt="add" class="icon add-product-icon" style="margin-right: 10px;">
                <span class="add-description">Adicionar Produto</span>
            </button>
        </div>
        <div class="table-wraper">
            <table>
                <thead>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Sabão em pó</td>
                        <td>5</td>
                        <td>R$ 5.00</td>
                        <td class="actions">
                            <div class="table-icon edit">
                                <img src="assets/icons/edit.svg" alt="edit">
                                <span>Editar</span>
                            </div>
                            <div class="table-icon delete">
                                <img src="assets/icons/trash.svg" alt="edit">
                                <span>Excluir</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>