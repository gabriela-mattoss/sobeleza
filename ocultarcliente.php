<?php
 
    include('conexaobd.php');

if (isset($_POST['idcliente']) && isset($_POST['ocultar'])) {
    $cliente_id = $_POST['idcliente'];
    $ocultar = $_POST['ocultar'];

    $sql = "UPDATE clientes SET ocultar = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $ocultar, $idcliente);

    if ($stmt->execute()) {
        echo "Cliente atualizado com sucesso.";
    } else {
        echo "Erro ao atualizar o cliente: " . $stmt->error;
    }

    $stmt->close();
}

$sql = "SELECT * FROM clientes WHERE ocultar = 0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nome</th><th>Celular</th>Email<th>Data de Nascimento</th>CPF</tr></th>RG</tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["idcliente"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["celular"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["datanasc"] . "</td>";
        echo "<td>" . $row["cpf"] . "</td>";
        echo "<td>" . $row["rg"] . "</td>";
        echo "<td>
                <form method='post'>
                    <input type='hidden' name='idcliente' value='" . $row["idcliente"] . "'>
                    <input type='hidden' name='ocultar' value='1'>
                    <input type='submit' value='Ocultar'>
                </form>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum cliente visível encontrado.";
}

$conn->close();
?>
