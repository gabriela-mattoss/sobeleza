<?php

include('conexaobd.php');

$descserv = $_POST['descserv'];
$nomeserv = $_POST['nomeserv'];
$valorserv = $_POST['valorserv'];

$sql = "INSERT INTO servico (descserv, nomeserv, valorserv) VALUES ('$descserv', '$nomeserv', '$valorserv')";

if (mysqli_query($conn, $sql)){
    // Código JavaScript para exibir uma janela pop-up de sucesso
    echo "
    <script>
        window.alert('Serviço cadastrado com sucesso!');
        window.location.href = 'redirecionaservico.php';
    </script>
    ";
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conn);
}
?>
