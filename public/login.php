<?php
session_start();
require_once __DIR__ . '/../config/conexao.php';
require_once __DIR__ . '/../src/controller/UsuarioController.php';

$controller = new UsuarioController($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($controller->login($login, $senha)) {
        header("Location: index.php");
        exit;
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>
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
        <div class="login-area">
            <div class="login-header">
                <img src="assets/icons/box.svg" alt="box icon" class="icon login-icon">
                <h3>Avanti Inventory <br /> Management</h3>
            </div>
            <span class="">Acesse sua conta para gerenciar o estoque</span>
            <br />
            <br />
            <form action="" class="" method="post">
                <label for="usuario" class="">Usuário</label>
                <input type="text" name="usuario" class="">

                <label for="senha" class="">Senha</label>
                <input type="password" name="senha" class="">
                <br />
                <input type="submit" value="Entrar" class="botao-login">
                 <?php if (isset($erro)): ?>
                    <div class="error-box"><?= $erro ?></div>
                <?php endif; ?>
            </form>
            <span class="">Esqueceu sua senha? Contate o administrador</span>
        </div>
    </div>

</body>

</html>