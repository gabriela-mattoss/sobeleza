<?php

if (isset($_POST['login'])) {  // Verifica se o botão de login foi clicado
    header("Location: index.php");  // Redireciona 
    exit;  
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login administrador</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<style>
    body {
        margin: 0;
        font-family: 'Noto Sans', sans-serif;
    }

    body * {
        box-sizing: border-box;
    }

    .main-login {
        width: 100vw;
        height: 100vh;
        background-color: rgb(254, 255, 170); /* Cor de fundo original */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .left-login, .right-login {
        width: 50vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .left-login {
        flex-direction: column;
    }

    .left-login > h1 {
        font-size: 3vh;
        color: rgb(148, 0, 0); /* Cor da letra original */
    }

    .left-login-image {
        width: 35vw;
    }

    .card-login {
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 30px;
        background: white;
        border-radius: 20px;
        box-shadow: 0px 10px 40px rgb(250, 252, 142);
    }

    .card-login > h1 {
        color: rgb(148, 0, 0); /* Cor da letra original */
        font-weight: 800;
        margin: 0;
    }

    .textfield {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        margin: 20px 0;
    }

    .textfield > input {
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 15px;
        background: white;
        color: black;
        font-size: 12pt;
        box-shadow: 0px 10px 40px rgb(250, 252, 142);
        outline: none;
    }

    .textfield > label {
        color: black;
        margin-bottom: 10px;
        width: 100%;
    }

    .textfield > input::placeholder {
        color: grey;
    }

    .btn-login {
        width: 100%;
        padding: 16px 0;
        margin: 25px;
        border: none;
        border-radius: 8px;
        outline: none;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 3px;
        color: white;
        background: rgb(148, 0, 0);
        cursor: pointer;
        box-shadow: 0px 10px 40px -12px rgb(250, 252, 142);
    }

    @media only screen and (max-width: 950px) {
        .card-login {
            width: 85%;
        }
    }

    @media only screen and (max-width: 600px) {
        .main-login {
            flex-direction: column;
        }

        .left-login > h1 {
            display: none;
        }

        .left-login, .right-login {
            width: 100%;
            height: auto;
        }

        .left-login-image {
            width: 50vw;
        }

        .card-login {
            width: 90%;
        }
    }
</style>

<body>
<div class="main-login">
    <div class="left-login">
        <h1>Faça login e administre seu salão da melhor forma!</h1>
        <img src="img/salao.svg" class="left-login-image" alt="Salão animação">
    </div>
    <div class="right-login">
        <div class="card-login">
            <h1>LOGIN</h1>
            <form method="post" action="processalogin.php">
                <div class="textfield">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" placeholder="Seu e-mail">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Sua senha">
                </div>
                <button class="btn-login" type="submit" name="login">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>





