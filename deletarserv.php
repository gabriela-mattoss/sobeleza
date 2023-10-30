<?php

if (!empty($_GET['id'])) {

    include('conexaobd.php');

    $idserv = $_GET['id'];

    $sqlSelect = "SELECT * FROM servico WHERE idserv=$idserv";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
       
            $sqlDelete = "DELETE FROM servico WHERE idserv=$idserv";
            $resultDelete = $conn->query($sqlDelete);
        }
    } 
        header('Location: redirecionaservico.php');
?>