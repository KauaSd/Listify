<?php
$servidor= "localhost";
$usuario="root";
$senha="";
$db="todolist";

$conexao=mysqli_connect($servidor,$usuario,$senha,$db);

$tarefa=$_POST['tarefa'];
$desc=$_POST['descricao'];
$dataInicio=$_POST['dataInicio'];
$dataFim=$_POST['dataFim'];

$query="INSERT INTO lista (nm_tarefa,desc_tarefa,dataInicio_tarefa,dataFim_tarefa)
            VALUES ('$tarefa','$desc','$dataInicio','$dataFim')"; 

mysqli_query($conexao, $query);
header('Location: index.php?pagina=form');
