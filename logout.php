<?php
session_start();

if (isset($_SESSION['email'])) {
    // Destruir a sessão
    session_destroy();

    // Redirecionar para a página de login ou qualquer outra página desejada
    header("Location: login.php");
    exit();
} else {
    // Se o usuário não estiver logado, redirecione para a página de login
    header("Location: login.php");
    exit();
}
?>
