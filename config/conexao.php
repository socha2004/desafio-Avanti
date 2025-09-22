<?php 
$host = "hostname";
$nomeDoBanco = "desafio_avanti";
$usuario = "root";
$senha = "socha_dev";

try {
    $conn = new PDO("mysql:host=localhost;dbname=desafio_avanti;charset=utf8", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (error) {
    echo "Erro na conexão: " . $e->getMessage();
    exit;
};


?>