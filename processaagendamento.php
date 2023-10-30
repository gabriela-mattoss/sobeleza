<?php

include('conexaobd.php');

$servico = $_POST['servico'];
$datas = $_POST['datas'];
$hora = $_POST['hora'];
$clientes = $_POST['clientes'];


$sql = "INSERT INTO agendamento (servico, datas, hora, clientes) VALUES ('$servico', '$datas', '$hora', '$clientes')";

if (mysqli_query($conn, $sql)){
    echo "Cadastro realizado com sucesso!";
    header("Location: redirecionagenda.php");
} else {
    echo "Erro ao cadastrar: " , mysql_error($conn);
}
