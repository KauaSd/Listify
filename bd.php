<?php
$servidor= "localhost";
$usuario="root";
$senha="";
$db="todolist";

$conexao=mysqli_connect($servidor,$usuario,$senha,$db);

$tarefa=$_POST['tarefa'];
$desc=$_POST['descricao'];
$dataTarefa=$_POST['dataTarefa'];

$query="INSERT INTO lista (nm_tarefa,desc_tarefa,dataTarefa)
            VALUES ('$tarefa','$desc','$dataTarefa')"; 

mysqli_query($conexao, $query);
header('Location: index.php?pagina=addTarefa');
