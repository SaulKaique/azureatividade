<?php
session_start();
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            echo "Login bem-sucedido!";
            header('Location: http://localhost/azureatividade/src/html/');
        } else {
            echo "Senha incorreta.";

        }
    } else {
        echo "Usuário não encontrado.";
    }

    $conn->close();
}
?>
