<?php

include('conexaobd.php');

$idcliente = $_POST['idcliente']; 

$nome = $_POST['nome'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$datanasc = $_POST['datanasc'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];

$sql = "UPDATE clientes SET nome='$nome', celular='$celular', email='$email', datanasc='$datanasc', cpf='$cpf', rg='$rg' WHERE idcliente=$idcliente";

if (mysqli_query($conn, $sql)) {
    echo "Atualização realizada com sucesso!";
    header("Location: redirecionacadastro.php");
} else {
    echo "Erro ao atualizar: " . mysqli_error($conn);
}
?>
