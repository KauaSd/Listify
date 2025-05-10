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
            <h1 class="titlePage">Adicionar Nova Tarefa</h1>
            <div class="Form">
                <form class="Formulario" action="bd.php" method="POST">
                    <label class="labelFormulario">Nome da Tarefa:</label>
                    <input class="form-control" type="text" name="tarefa">
                    <label class="labelFormulario">Decrição:</label>
                    <input class="form-control" type="text" name="descricao">
                    <input class="form-control" type="date" name="dataInicio">
                    <input class="form-control" type="date" name="dataFim">
                    <button type="submit" class="btnCriarTarefa">Criar Tarefa</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
