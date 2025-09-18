<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login/estiloLogin.css">
    <link rel="stylesheet" href="assets/css//estilo.css">
    <title>Login - Avanti Inventory</title>
</head>

<body>
    <div class="alinhamento-login">
        <div class="login-area shadow">
            <div class="d-flex align-items-center p-1">
                <img src="assets/icons/box.svg" alt="box icon" class="icon login-icon">
                <h3>Avanti Inventory <br /> Management</h3>
            </div>
            <span class="fw-semibold">Acesse sua conta para gerenciar o estoque</span>
            <br />
            <br />
            <form action="" class="d-flex flex-column" method="post">
                <label for="usuario" class="fw-semibold">Usuário</label>
                <input type="text" name="usuario" class="form-control">

                <label for="senha" class="fw-semibold">Senha</label>
                <input type="password" name="senha" class="form-control">
                <br />
                <input type="submit" value="Entrar" class="botao-login btn fw-semibold">
            </form>
            <span class="fw-semibold">Esqueceu sua senha? Contate o administrador</span>
        </div>
    </div>

</body>

</html>