<?php 
include 'navbar.php';
if (isset($_GET['showModal']) && $_GET['showModal'] == 1): ?>
    <div class="espera-overlay" id="espera">
        <div class="espera-box">
            <h2>Tarefa adicionada!</h2>
        </div>
    </div>

<script>
    setTimeout(function() {
        const modal = document.getElementById('espera');
        if(modal) modal.style.display = 'none';

        const url = new URL(window.location);
        url.searchParams.delete('showModal');
        window.history.replaceState({}, document.title, url);
    }, 1000);
</script>
<?php endif; ?>
    <title> Adicionar Tarefa | Listify </title>
        <div class="formholder">
            <h1 class="titlePage">Adicionar Nova Tarefa</h1>
            <div class="Form">
                <form class="Formulario" action="bd.php" method="POST">
                    <div class="layoutForm">
                        <div class="inputsForm">
                            <label class="labelFormulario">Nome da Tarefa:</label>
                            <input class="form-control" type="text" name="tarefa">
                            <br><br>
                            <label class="labelFormulario">Decrição:</label>
                            <input class="form-control" type="text" name="descricao">
                        </div>
                        <div class="calendar">
                            <div class="header">
                                <button id="prevBtn" type='button'>&lt;</button>
                                <div class="monthYear" id="monthYear"></div>
                                <button id="nextBtn" type='button'>&gt;</button>
                            </div>
                            <div class="days">
                                <div class="day">Dom</div>
                                <div class="day">Seg</div>
                                <div class="day">Ter</div>
                                <div class="day">Qua</div>
                                <div class="day">Qui</div>
                                <div class="day">Sex</div>
                                <div class="day">Sáb</div>
                            </div>
                            <div class="dates" id="dates"></div>
                            <input class="form-control" id='dateInput' type="date" name="dataTarefa" hidden>
                        </div>
                    </div>
                    <button type="submit" class="btnCriarTarefa">Criar Tarefa</button>
                </form>
            </div>
        </div>
    </div>
    <script src="mensal.js"></script>
</body>
</html>
