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

                <img src="assets/icons/blocks.svg" alt="blocks" class="icon">
                <span class="connected-info">Conectado</span>

                <img src="assets/icons/logout.svg" alt="logout" class="icon">
                <span>Sair</span>

            </div>
        </nav>
    </header>
    <main>
        <div class="products-header">
            <h1>Produtos</h1>
            <button class="create-button">
                <img src="assets/icons/add.svg" alt="add" class="icon add-product-icon" style="margin-right: 10px;">
                <span class="add-description">Adicionar Produto</span>
            </button>
        </div>
        <div class="table-wraper">
            <table>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Ações</th>
            </table>
        </div>
    </main>
</body>

</html>