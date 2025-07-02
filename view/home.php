<?php 
include 'navbar.php';
include 'funcoes.php';
$semana = pegarDiasSemana();
?>
<title> Home | Listify </title>
<div class="formholder">
    <h1 class="titlePage titleHome">Lista de Tarefas</h1>
    <div class="SemanalHeader" style="display: flex; align-items: center;">
        <button id="prev" type="button">◀</button>
        <div class="BarraSemana" id="barraSemana">
            <?php foreach ($semana as $dia): ?>
            <div class="btnDia <?= $dia['is_today'] ? 'active' : '' ?>" data-date="<?= $dia['date'] ?>">
                <?= $dia['label'] ?>
            </div>
            <?php endforeach; ?>
        </div>
        <button id="next" type="button">▶</button>
    </div>

    <div class="Form FormHome">
        <h1 class="titleFormHome">Minhas Tarefas</h1>
        <div id="containerTarefas">

        </div>
    </div>
</div>
<script src="home.js"></script>
</body>

</html>