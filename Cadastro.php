<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Conectar ao banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=SandyneskATV', 'root', 'cimatec');

    // Inserir no banco de dados
    $stmt = $pdo->prepare("INSERT INTO Usuarios (nome, email, senha) VALUES (?, ?, ?)");
    if ($stmt->execute([$nome, $email, $senha])) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}
?>
