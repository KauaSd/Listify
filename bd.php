<?php
$servidor= "localhost";
$usuario="root";
$senha="";
$db="todolist";

$conexao=mysqli_connect($servidor,$usuario,$senha,$db);

$afazer=$_POST['afazer'];

$query="INSERT INTO LISTA (afazer)
            VALUES ('$afazer')"; 

mysqli_query($conexao, $query);
header('Location: index.php?pagina=form');
