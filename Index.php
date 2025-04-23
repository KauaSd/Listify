<?php
$servidor= "localhost";
$usuario="root";
$senha="";
$db="todolist";

$conexao=mysqli_connect($servidor,$usuario,$senha,$db);
$query="SELECT * FROM LISTA";
$resultado=mysqli_query($conexao,$query);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tarefa | Listify</title>
    <link rel="stylesheet" href="./style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2554b6ec93.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="divzona">
        <div class="Menu">
            <div class="LogoListify">
                <img src="./imgs/LogoListifySemFundo.png" alt="Logo Listify" width="213" height="135">
            </div>
            <div class="btnsMenu">
                <div class="btnHome">
                    <a href="?pagina=form" class="ahome">
                        <i class="fa-solid fa-house casa"></i>
                        <button class="home">Home</button>
                    </a>
                </div>
                <div class="btnMensal">
                    <a href="#" class="amensal">
                        <i class="fa-regular fa-calendar mensalicon"></i>
                        <button class="mensal">Mensal</button>
                    </a>
                </div>
                <div class="linha"></div>
                <div class="btnAdicionar">
                    <a href="#" class="aadicionar">
                        <i class="fa-solid fa-plus adicionaricon"></i>
                        <button class="adicionar">Adicionar</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="formholder">
            <div class="Form">
                <form action="bd.php" method="POST">
                    <input class="form-control" type="text" placeholder="Nome da Tarefa" name="tarefa">
                    <input class="form-control" type="text" placeholder="Descrição" name="descricao">
                    <input class="form-control" type="date" name="dataInicio">
                    <input class="form-control" type="date" name="dataFim">
                    <button type="submit" class="btn btn-dark">Criar Tarefa</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
