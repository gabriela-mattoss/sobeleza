<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agendamento de clientes</title>

    <link rel="stylesheet" href="estilos/agenda.css">
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
        <li class= "item-menu">
            <a href= "contausuario.php">
                <span class="icon"><i class="bi bi-person-circle"></i></span>
                <span class="txt-link">Conta</span>
            </a>
        </li>
        <li class= "item-menu ativo">
            <a href= "telainicial.php">
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
    </ul>
</nav>    
    <script src="menu.js"></script>
    
    <div class="agenda">
        <header>
            <h1>Minha Agenda</h1>
            <button id="adicionar-evento">+ Adicionar Evento</button>
        </header>
    <div class="calendario" id="calendario">
    </div>
    </div>
    <div class="evento-form" id="evento-form">
        <h2>Novo Evento</h2>
        <label for="evento-titulo">Título:</label>
        <input type="text" id="evento-titulo">
        
        <label for="evento-data">Data e Hora:</label>
        <input type="datetime-local" id="evento-data">
    <div class="botoes-form">
        <button id="salvar-evento">Salvar</button>
        <button id="cancelar-evento">Cancelar</button>
    </div>
    </div>
        <script src="agenda.js"></script>
</body>
</html>
