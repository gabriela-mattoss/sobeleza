<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    
    <link rel="stylesheet" href="estilos/telainicial.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>

    /* Adicione esse CSS ao seu arquivo estilos/telainicial.css */

/* Estilo para a lista de agendamentos */
.agendamentos ul {
    list-style-type: none;
    padding: 0;
}

.agendamentos ul li {
    margin-bottom: 10px;
    border: 1px solid #ccc;
    padding: 10px;
    background-color: #f9f9f9;
    border-radius: 5px;
}

.agendamentos ul li h3 {
    margin: 0;
    font-size: 18px; /* Diminui o tamanho da fonte para 24px ou o tamanho desejado */
}

.agendamentos ul li p {
    margin: 0;
    font-size: 10px; /* Diminui o tamanho da fonte para 18px ou o tamanho desejado */
    color: #777;
}


    </style>

</head>
<body>
    <div class=container>
<nav class="menu lateral">
    <div class="btn-expandir">
        <i class="bi bi-list" id="btn-exp"></i>
    </div>
    <ul>
        <li class= "item-menu">
            <a href= "contausuario.php">
                <span class="icon"><i class="bi bi-person-circle"></i></span>
                <span class="txt-link">Conta</span>
            </a>
        </li>
        <li class= "item-menu ativo">
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
<div class="conteudo">
            <div class="bem-vindo">
                <h1>Bem-vindo a sua agenda!</h1>
                <p>Não é só um sistema, é a revolução que você precisa no seu salão.</p>
            </div> 

            <div class="agendamentos">
                <h3>Agendamentos realizados para hoje:</h3>
                <ul id="agendamentos-list"></ul>
            </div> 
        </div>
    </div>

<script src="menu.js"></script>

<script>
    window.location.href = "login.php";
</script>

<script>
    fetch('exibiragenda.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('agendamentos-list').innerHTML = data;
        });
</script>
</body>
</html>