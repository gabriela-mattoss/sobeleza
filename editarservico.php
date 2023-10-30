<?php
$servername = "localhost";
$username = "root";
$password = "300905";
$dbname = "tcc";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!empty($_GET['id'])) {
    $idserv = $_GET['id'];
    echo $idserv;

    $sqlSelect = "SELECT * FROM servico WHERE idserv=$idserv";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = $result->fetch_assoc()) {
            $descserv = $user_data['descserv'];
            $nomeserv = $user_data['nomeserv'];
            $valorserv = $user_data['valorserv'];
        }
    } else {
        header('Location: redirecionaservico.php');
    }
} else {
    // Se não houver idcliente, defina as variáveis como vazias
    $descserv = "";
    $nomeserv = "";
    $valorserv = "";
}
?>

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
            <h2 class="mb-4">Edição de serviço</h2>
            <form method="POST" action="atualizaserv.php">
            <div class="form-group">
                <input type="hidden" name="idserv" value="<?php echo $idserv; ?>">
                    <label for="nomeserv">Serviço:</label>
                    <input type="text" name="nomeserv" id="nomeserv" class="form-control" value="<?php echo $nomeserv; ?>" required>
                </div>
                <div class="form-group">
                    <label for="valorserv">Valor:</label>
                    <input type="text" name="valorserv" id="valorserv" class="form-control" placeholder="R$:" value="<?php echo $valorserv; ?>" required>
                </div>
                <div class="form-group">
                    <label for="descserv">Descrição:</label>
                    <input type="text" name="descserv" id="descserv" class="form-control" value="<?php echo $descserv; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <button type="submit" class="btn btn-danger" id="cancelButton">Cancelar</button>
			</div>
		</div>
	</div>
<script>
  document.getElementById("cancelButton").addEventListener("click", function() {
    window.location.href = "redirecionaservico.php";
  });

  document.addEventListener('DOMContentLoaded', function() {
        const arquivarButtons = document.querySelectorAll('.btn-primary');
        arquivarButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault(); 

                if (confirm("Atualização realizada com sucesso!")) {
                    window.location.href = button.getAttribute('href');
                }
            });
        });
    });


</script>

</body>
</html>