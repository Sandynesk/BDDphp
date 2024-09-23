<?php
$host = 'localhost';
$db = 'SandyneskATV';
$user = 'root'; // ou nome de usuário do MySQL
$pass = 'cimatec';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
