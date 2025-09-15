<?php

include 'db.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$desc = $_POST['desc'];
$data = $_POST['data'];

$query = "UPDATE LISTA SET nm_tarefa='$nome',desc_tarefa='$desc',dataTarefa='$data' WHERE id_tarefa = $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=home');