<?php
$servidor= "localhost";
$usuario="root";
$senha="";
$db="todolist";

$conexao=mysqli_connect($servidor,$usuario,$senha,$db);
$query="SELECT *FROM LISTA";
$resultado=mysqli_query($conexao,$query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="?pagina=form">adicionar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?pagina=list">lista de afazeres</a>
  </li>
</ul>