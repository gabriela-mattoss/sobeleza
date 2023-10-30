<?php

include('conexaobd.php');

$idconta = $_POST['idconta']; 
$nome = $_POST['nome'];
$nomeEstab = $_POST['nomeEstab'];
$localizacao = $_POST['localizacao'];

$sql = "UPDATE conta SET nome=?, nomeEstab=?, localizacao=? WHERE idconta=?";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die("Erro na preparação da consulta: " . mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssi", $nome, $nomeEstab, $localizacao, $idconta);

if (mysqli_stmt_execute($stmt)) {
    echo "Atualização realizada com sucesso!";
    header("Location: contausuario.php");
} else {
    echo "Erro ao atualizar: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
?>
