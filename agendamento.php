<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Agendamento</title>
    
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
            <h1>Formulário de Agendamento</h1>
            <form action="processaagendamento.php" method="post" id="agendamento-form">
                <div class="form-group">
                    <label for="datas">Data:</label>
                    <input type="date" name="datas" id="datas" class="form-control" required min="2023-01-01" required>
                </div>
                <div class="form-group">
                    <label for="hora">Hora:</label>
                    <input type="time" name="hora" id="hora" class="form-control" required>
                </div>
                <div class="form-group">
                <label for="clientes">Escolha uma cliente:</label>
                <select name="clientes" id="clientes" class="form-control" required>
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
                    <select name="servico" id="servico" class="form-control" required>
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
                <button type="submit" class="btn btn-primary">Agendar</button>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var dataInput = document.getElementById("datas");

    dataInput.addEventListener("input", function() {
        var selectedDate = dataInput.value;

        var currentDate = new Date().toISOString().split('T')[0];

        if (selectedDate < currentDate) {
            alert("Não é possível agendar para datas anteriores ao dia atual.");
            dataInput.value = "";
        }
    });

    var form = document.getElementById("agendamento-form");
    form.addEventListener("submit", function(event) {
        var selectedDate = dataInput.value;
        var currentDate = new Date().toISOString().split('T')[0];

        if (selectedDate < currentDate) {
            alert("Não é possível agendar para datas anteriores ao dia atual.");
            event.preventDefault();
        }
    });
});

</script>

</body>
</html>
