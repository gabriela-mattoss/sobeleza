<?php

include ('conexaobd.php');

if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
}

$email = $_POST["email"];
$senha = $_POST["senha"];

$stmt = $conn->prepare("SELECT * FROM administrador WHERE email = ? AND senha = ?");
$stmt->bind_param("ss", $email, $senha);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    header("Location: index.php");
} else {
    header("Location: login.php?erro=1");
}

$stmt->close();
 
?>
