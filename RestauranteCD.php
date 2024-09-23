<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $tipo_cozinha = $_POST['tipo_cozinha'];

    // Conectar ao banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=SandyneskATV', 'root', 'cimatec');

    // Inserir no banco de dados
    $stmt = $pdo->prepare("INSERT INTO Restaurantes (nome, endereco, tipo_cozinha) VALUES (?, ?, ?)");
    if ($stmt->execute([$nome, $endereco, $tipo_cozinha])) {
        echo "Restaurante cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar restaurante.";
    }
}
?>
