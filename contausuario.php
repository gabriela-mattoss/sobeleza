<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Conta do usuário</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/telainicial.css">

    <style>
        .user-profile {
            text-align: center;
        }

        .user-profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        
        .user-info {
            text-align: center;
            max-width: 400px;
            margin: 0 auto;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
        }

        .user-info h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .user-info p {
            font-size: 16px;
        }

        .salon-info {
            text-align: center;
            max-width: 400px;
            margin: 0 auto;
        }

        .salon-info h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .edit-button {
            text-align: center;
        }
    </style>

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
        <li class= "item-menu ativo">
            <a href= "contausuario.php">
                <span class="icon"><i class="bi bi-person-circle"></i></span>
                <span class="txt-link">Conta</span>
            </a>
        </li>
        <li class= "item-menu">
            <a href= "index.php">
                <span class="icon"><i class="bi bi-house"></i></span>
                <span class="txt-link">Home</span>
            </a>
        </li>
        <li class= "item-menu">
            <a href= "redirecionacadastro.php">
                <span class="icon"><i class="bi bi-person-fill"></i></span>
                <span class="txt-link">Clientes</span>
            </a>
        </li>
        <li class= "item-menu">
            <a href= "redirecionagenda.php">
                <span class="icon"><i class="bi bi-calendar2-heart"></i></span>
                <span class="txt-link">Agendamentos</span>
            </a>
        </li>
        <li class= "item-menu">
            <a href= "redirecionaservico.php">
                <span class="icon"><i class="bi bi-card-list"></i></span>
                <span class="txt-link">Serviços</span>
            </a>
        </li>
        <li class= "item-menu">
            <a href= "logout.php">
                <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
                <span class="txt-link">Sair</span>
            </a>
        </li>
    </ul>
</nav>
</nav>
<div class="container mt-5">
        <div class="user-profile">
            <img src="img/userpadrao.jpg" alt="Foto do Usuário">
        </div>
        <div class="user-info">
            <h2>Proprietária: Lucineia Dos Reis</h2>
            <p>Nome do Estabelecimento: Salão Só Beleza</p>
            <p>Telefone: (48) 98418-3911</p>
            <p>Localização: Av. Prefeito Frncisco Lumertz Júnior, Nova Brasília, Sombrio - SC.</p>
        </div>
    </div>
    <script src="menu.js"></script>
</body>
</html>