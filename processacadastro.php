<?php
include('conexaobd.php');

$nome = $_POST['nome'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$datanasc = $_POST['datanasc'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];

// Calcular a idade com base na data de nascimento
$dataAtual = new DateTime();
$dataNascimento = new DateTime($datanasc);
$idade = $dataNascimento->diff($dataAtual)->y;

if ($idade >= 18) {
    $sql = "INSERT INTO clientes (nome, celular, email, datanasc, cpf, rg) VALUES ('$nome', '$celular', '$email', '$datanasc', '$cpf', '$rg')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>window.location = 'redirecionacadastro.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar: " . mysqli_error($conn) . "');</script>";
    }
} else {
    echo "<script>alert('O cadastro não pôde ser concluído devido à idade do cliente, que é menor de 18 anos.');</script>";
    echo "<script>window.location = 'redirecionacadastro.php';</script>";
}
?>
