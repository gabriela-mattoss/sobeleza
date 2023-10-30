<?php
$servername = "localhost";
$username = "root";
$password = "300905";
$dbname = "tcc";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!empty($_GET['id'])) {
    $idagenda = $_GET['id'];
    echo $idagenda;

    $sqlSelect = "SELECT * FROM agendamento WHERE idagenda=$idagenda";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = $result->fetch_assoc()) {
            $servico = $user_data['servico'];
            $datas = $user_data['datas'];
            $hora = $user_data['hora'];
            $clientes = $user_data['clientes'];
        }
    } else {
        header('Location: redirecionagenda.php');
    }
} else {
    // Se não houver idcliente, defina as variáveis como vazias
    $servico = "";
    $datas = "";
    $hora = "";
    $clientes = "";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Agendamento</title>
    
    <link rel="stylesheet" href="estilos/telainicial.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="menu lateral">
    <div class="btn-expandir">
        <i class="bi bi-list" id="btn-exp"></i>
    </div>
    <ul>
        <li class="item-menu">
            <a href="contausuario.php">
                <span class="icon"><i class="bi bi-person-circle"></i></span>
                <span class="txt-link">Conta</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="index.php">
                <span class="icon"><i class="bi bi-house"></i></span>
                <span class="txt-link">Home</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="redirecionacadastro.php">
                <span class="icon"><i class="bi bi-person-fill"></i></span>
                <span class="txt-link">Clientes</span>
            </a>
        </li>
        <li class="item-menu ativo">
            <a href="redirecionagenda.php">
                <span class="icon"><i class="bi bi-calendar2-heart"></i></span>
                <span class="txt-link">Agendamentos</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="redirecionaservico.php">
                <span class="icon"><i class="bi bi-card-list"></i></span>
                <span class="txt-link">Serviços</span>
            </a>
        </li>
        <li class= "item-menu">
            <a href= "redirecionaservico.php">
                <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
                <span class="txt-link">Sair</span>
            </a>
        </li>
    </ul>
</nav>    
<script src="menu.js"></script>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>Edição de Agendamento</h1>
            <form action="processaagendamento.php" method="post">
                <div class="form-group">
                    <label for="data">Data:</label>
                    <input type="date" name="data" id="data" class="form-control" value="<?php echo $datas ?>" required>
                </div>
                <div class="form-group">
                    <label for="hora">Hora:</label>
                    <input type="time" name="hora" id="hora" class="form-control" value="<?php echo $hora ?>" required>
                </div>
                <div class="form-group">
                <label for="clientes">Escolha uma cliente:</label>
                <select name="clientes" id="clientes" class="form-control"  value="<?php echo $clientes ?>"  required>
                    <option value="">Selecione uma cliente</option>
                    <?php
                    // Conecte ao banco de dados e recupere os clientes não ocultos
                    $conn = mysqli_connect("localhost", "root", "300905", "tcc");
                    $query = "SELECT idcliente, nome FROM clientes WHERE ocultar = 0"; // Assumindo que 'oculto' é o campo que indica se o cliente está oculto
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['idcliente'] . "'>" . $row['nome'] . "</option>";
                    }
                    mysqli_close($conn);
                    ?>
                </select>
                </div>
                <div class="form-group">
                    <label for="servico">Escolha um serviço:</label>
                    <select name="servico" id="servico" class="form-control"  value="<?php echo $servico ?>" required>
                        <option value="">Selecione um serviço</option>
                        <?php
                        // Conecte ao banco de dados e recupere os serviços
                        $conn = mysqli_connect("localhost", "root", "300905", "tcc");
                        $query = "SELECT idserv, nomeserv FROM servico";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['idserv'] . "'>" . $row['nomeserv'] . "</option>";
                        }
                        mysqli_close($conn);
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
