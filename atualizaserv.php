<?php

include('conexaobd.php');

$idserv = $_POST['idserv']; 

$descserv = $_POST['descserv'];
$nomeserv = $_POST['nomeserv'];
$valorserv = $_POST['valorserv'];

$sql = "UPDATE servico SET descserv='$descserv', nomeserv='$nomeserv', valorserv='$valorserv' WHERE idserv=$idserv";

if (mysqli_query($conn, $sql)) {
    echo "Atualização realizada com sucesso!";
    header("Location: redirecionaservico.php");
} else {
    echo "Erro ao atualizar: " . mysqli_error($conn);
}
?>
