<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.2" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/2554b6ec93.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="ajustar-div-editar">
        <div class="Form Formeditar">
            <div class="layoutForm">
                <div class="inputsForm">
                    <?php

		include'db.php';

		$id = $_GET['id'];

		while ($linha = mysqli_fetch_array($resultado)){

			if($linha['id_tarefa'] == $id){
					?>
                    <h1>Editar tarefa</h1><br>
                    <form method="post" action="edita_tarefa.php">

                        <input type="hidden" name="id" value="<?php echo $linha['id_tarefa']; ?>">

                        <label>Nome da tarefa:</label><br>
                        <input type="text" name="nome" placeholder="Digite o nome da tarefa"
                            value="<?php echo $linha['nm_tarefa'] ?>">
                        <br><br>
                        <label>Descrição da terefa:</label><br>
                        <input type="text" name="desc" placeholder="Digite a Descrição da terefa"
                            value="<?php echo $linha['desc_tarefa'] ?>">
                        <br><br>
                        <label>Data da tarefa:</label><br>
                        <input type="date" name="data" placeholder="Digite a data da tarefa"
                            value="<?php echo $linha['dataTarefa'] ?>">
                        <br><br>
                        <input type="submit" value="Editar tarefa">
                    </form>
                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>
</body