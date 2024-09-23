<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_usuario = $_POST['id_usuario'];
    $id_restaurante = $_POST['id_restaurante'];
    $nota = $_POST['nota'];
    $comentario = $_POST['comentario'];

    $stmt = $pdo->prepare("CALL AvaliarRestaurante(?, ?, ?, ?)");
    if ($stmt->execute([$id_usuario, $id_restaurante, $nota, $comentario])) {
        echo "Avaliação inserida com sucesso!";
    } else {
        echo "Erro ao inserir a avaliação.";
    }
}
?>
