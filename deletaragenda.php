<?php

if (!empty($_GET['id'])) {

    include('conexaobd.php');

    $idagenda = $_GET['id'];

    $sqlSelect = "SELECT * FROM agendamento WHERE idagenda=$idagenda";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
       
            $sqlDelete = "DELETE FROM agendamento WHERE idagenda=$idagenda";
            $resultDelete = $conn->query($sqlDelete);
        }
    } 
        header('Location: redirecionagenda.php');
?>