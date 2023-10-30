<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de Serviços</title>
	
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
            <h2 class="mb-4">Cadastro de Serviço</h2>
            <form method="POST" action="processaserv.php">
                <div class="form-group">
                    <label for="nomeserv">Serviço:</label>
                    <input type="text" name="nomeserv" id="nomeserv" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="valorserv">Valor:</label>
                    <input type="number" name="valorserv" id="valorserv" class="form-control" required step="0.01">
                </div>
                <div class="form-group">
                    <label for="descserv">Descrição:</label>
                    <input type="text" name="descserv" id="descserv" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button class="btn btn-danger" onclick="history.back()">Cancelar</button>
			</div>
		</div>
	</div>
<script>
  document.getElementById("cancelButton").addEventListener("click", function() {
    window.location.href = "redirecionaservico.php";
  });
  
</script>

</body>
</html>