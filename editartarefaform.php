<?php

include'db.php';

$id = $_GET['id'];

while ($linha = mysqli_fetch_array($resultado)){

    if($linha['id_tarefa'] == $id){
			?>
			<h1>Editar tarefa</h1><br>
			<form method="post" action="edita_tarefa.php">

				<input type="hidden" name="id" value= "<?php echo $linha['id_tarefa']; ?>">

				<label>Nome da tarefa:</label><br>
				<input type="text" name="nome" placeholder="Digite o nome da tarefa" value="<?php echo $linha['nm_tarefa'] ?>">
				<br><br>
				<label>Descrição da terefa:</label><br>
				<input type="text" name="desc" placeholder="Digite a Descrição da terefa" value="<?php echo $linha['desc_tarefa'] ?>">
				<br><br>
                <label>Data da tarefa:</label><br>
                <input type="date" name="data" placeholder="Digite a data da tarefa" value="<?php echo $linha['dataTarefa'] ?>">
				<br><br>
				<input type="submit" value="Editar tarefa">
			</form>
		<?php }} ?>
	

