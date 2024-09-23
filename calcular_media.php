<?php
include 'db.php';

$id_restaurante = $_GET['id_restaurante'];
$stmt = $pdo->prepare("CALL CalcularMediaClassificacao(?, @media)");
$stmt->execute([$id_restaurante]);

$result = $pdo->query("SELECT @media AS media")->fetch(PDO::FETCH_ASSOC);
echo "Média de classificação: " . $result['media'];
?>
