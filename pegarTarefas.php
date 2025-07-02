<?php
include 'db.php';

$date = $_GET['date'] ?? null;
if (!$date) {
	echo json_encode([]);
	exit;
}

$stmt = $conexao->prepare("SELECT * FROM lista WHERE dataTarefa = ?");
$stmt->bind_param("s", $date);
$stmt->execute();
$resultado = $stmt->get_result();

$tarefas = [];
while ($row = $resultado->fetch_assoc()) {
    $tarefas[] = $row;
}

echo json_encode($tarefas);