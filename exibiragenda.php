<?php

include('conexaobd.php');

$hoje = date("Y-m-d"); // Usar o formato correto para a data

$sql = "SELECT * FROM agendamento WHERE datas = '$hoje' ORDER BY hora ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        // Converter o formato da data de "ano-mês-dia" para "dia/mês/ano"
        $dataFormatada = date("d/m/Y", strtotime($row["datas"]));
        
        echo "<li>" . $dataFormatada . " - " . $row["hora"] . " - " . $row["clientes"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Nenhum agendamento encontrado para hoje.";
}

$conn->close();
?>
