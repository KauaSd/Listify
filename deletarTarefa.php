<?php

include'db.php';

$idDaTarefa = $_GET['id'];


$query = "DELETE FROM LISTA WHERE id_tarefa = $idDaTarefa";

mysqli_query($conexao, $query);

header('location:index.php?pagina=home');