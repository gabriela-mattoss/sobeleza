<?php 

$servername = "localhost"; 
$username = "root"; 
$password = "300905"; 
$dbname = "tcc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} 

?>
