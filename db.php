<?php
$servidor= "localhost";
$usuario="root";
$senha="";
$db="todolist";

$conexao=mysqli_connect($servidor,$usuario,$senha,$db);
$query="SELECT * FROM LISTA";
$resultado=mysqli_query($conexao,$query);
?>