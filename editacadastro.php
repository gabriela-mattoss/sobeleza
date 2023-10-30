<?php
$servername = "localhost";
$username = "root";
$password = "300905";
$dbname = "tcc";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!empty($_GET['id'])) {
    $idcliente = $_GET['id'];
    echo $idcliente;

    $sqlSelect = "SELECT * FROM clientes WHERE idcliente=$idcliente";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = $result->fetch_assoc()) {
            $nome = $user_data['nome'];
            $celular = $user_data['celular'];
            $email = $user_data['email'];
            $datanasc = $user_data['datanasc'];
            $cpf = $user_data['cpf'];
            $rg = $user_data['rg'];
        }
    } else {
        header('Location: redirecionacadastro.php');
    }
} else {
    // Se não houver idcliente, defina as variáveis como vazias
    $nome = "";
    $celular = "";
    $email = "";
    $datanasc = "";
    $cpf = "";
    $rg = "";
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    
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
        <li class="item-menu">
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
            <h2 class="mb-4">Edição de cadastro</h2>
            <form method="POST" action="atualizacadastro.php">
            <div class="form-group">
                <input type="hidden" name="idcliente" value="<?php echo $idcliente; ?>">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $nome ?>" required>
                </div>
                <div class="form-group">
                    <label for="datanasc">Data de Nascimento:</label>
                    <input type="date" name="datanasc" id="datanasc" class="form-control" value="<?php echo $datanasc ?>" required>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" value="<?php echo $cpf ?>" required>
                </div>
                <div class="form-group">
                    <label for="rg">RG:</label>
                    <input type="text" name="rg" id="rg" class="form-control" value="<?php echo $rg ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $email?>" required>
                </div>
                <div class="form-group">
                    <label for="celular">Celular:</label>
                    <input type="text" name="celular" id="celular" class="form-control" value="<?php echo $celular ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Atualizar</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
