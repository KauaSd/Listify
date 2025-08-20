<?php
$servidor= "localhost";
$usuario="root";
$senha="";
$db="todolist";
 
$conexao = mysqli_connect($servidor, $usuario, $senha, $db);
 
$tarefa = $_POST['tarefa'];
$desc = $_POST['descricao'];
$dataTarefa = $_POST['dataTarefa'];
$concluida = isset($_POST['concluida']) ? 1 : 0;
 
$query = "INSERT INTO lista (nm_tarefa, desc_tarefa, dataTarefa, tarefaConcluida)
          VALUES ('$tarefa', '$desc', '$dataTarefa', '$concluida')";
 
if (mysqli_query($conexao, $query)) {
    echo "<script>
            alert('Tarefa cadastrada com sucesso!');
            window.location.href = 'index.php?pagina=addTarefa';
          </script>";
} else {
    echo "Erro ao cadastrar tarefa: " . mysqli_error($conexao);
}
?>
 