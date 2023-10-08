<?php
include_once("database/conectDB.php");

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $users = array();

    while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }

    $usersJSON = json_encode($users);

    echo $usersJSON;
} else {
    echo "Nenhum usuário encontrado";
}