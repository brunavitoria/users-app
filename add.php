<?php
include_once("database/conectDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $email = $employment_date = "";

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $employment_date = trim($_POST["employment_date"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Email inválido";
    }

    if (empty($message)) {
        $sql = "INSERT INTO users (name, email, employment_date) VALUES ('$name', '$email', '$employment_date')";

        if ($conn->query($sql) === TRUE) {
            $message = "Usuário cadastrado com sucesso";
        } else {
            $message = "Erro ao cadastrar usuário: " . $conn->error;
        }
    }
    echo json_encode($message);

}

?>