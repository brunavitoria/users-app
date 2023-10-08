<?php
$servername = "localhost"; // Nome do servidor do banco de dados
$username = "seu_usuario";  // Nome de usuário do banco de dados
$password = "sua_senha";    // Senha do banco de dados
$database = "usersapp";    // Nome do banco de dados

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
