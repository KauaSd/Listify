<?php
$servidor= "localhost";
$usuario="root";
$senha="";
$db="todolist";

$conexao=mysqli_connect($servidor,$usuario,$senha,$db);
$query="SELECT *FROM LISTA";
$resultado=mysqli_query($conexao,$query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tarefa | Listify</title>
    <link rel="stylesheet" href="./style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="Menu">
        <div class="Foto">
            <img src="./imgs/LogoListifySemFundo.png" alt="" width=213px height=135px>
        </div>
        <div class="btnMenu">
            <a href="?pagina=form" class="ahome">
                <i class="fa-solid fa-house casa"></i>
                <button class="home">Home</button>
            </a>
        </div>
        <div class="btnMensal">
            <a href="" class="amensal">
            <i class="fa-regular fa-calendar mensalicon"></i>
                <button class="mensal">Mensal</button>
            </a>
        </div>
        <div class="linha"></div>
        <div class="btnadicionar">
            <a href="" class="aadicionar">
            <i class="fa-solid fa-plus adicionaricon"></i>
                <button class="adicionar">adicionar</button>
            </a>
        </div>
    </div>
    <div class="Title">
        <h1>Adicionar Nova Tarefa</h1>
    </div>
    <div class="Form">
        <form action="bd.php" method="POST">
            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example"
                name="tarefa">
            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example"
                name="descricao">
            <input class="form-control" type="date" placeholder="Default input" aria-label="default input example"
                name="dataInicio">
            <input class="form-control" type="date" placeholder="Default input" aria-label="default input example"
                name="dataFim">
            <button type="submit" value="inserir afazer" class="btn btn-dark">Criar Tarefa</button>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/2554b6ec93.js" crossorigin="anonymous"></script>
</body>

</html>