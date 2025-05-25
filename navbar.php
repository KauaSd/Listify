<?php
// Define a página atual - exemplo, pode vir da query string, rota, etc.
$paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

// Função que retorna 'active' se for a página atual
function isActive($pagina, $paginaAtual) {
    return $pagina === $paginaAtual ? 'active' : '';
}
?>

    <div class="Menu">
        <div class="LogoListify">
            <img src="./imgs/LogoListifySemFundo.png" alt="Logo Listify" width="238" height="160">
        </div>
        <div class="btnsMenu">
            <div class="btnHome">
                <a href="?pagina=home" class="ahome home <?php echo isActive('home', $paginaAtual); ?>" id="home">
                    <i class="fa-solid fa-house casa <?php echo isActive('home', $paginaAtual); ?>"></i>
                    Home
                </a>
            </div>
            <div class="btnMensal">
                <a href="?pagina=mensal" class="amensal mensal <?php echo isActive('mensal', $paginaAtual); ?>" id="mensal">
                    <i class="fa-regular fa-calendar mensalicon <?php echo isActive('mensal', $paginaAtual); ?>"></i>
                    Mensal
                </a>
            </div>
            <div class="linha"></div>
            <div class="btnAdicionar">
                <a href="?pagina=addTarefa" class="aadicionar adicionar <?php echo isActive('addTarefa', $paginaAtual); ?>" id="adicionar">
                    <i class="fa-solid fa-plus adicionaricon <?php echo isActive('addTarefa', $paginaAtual); ?>"></i>
                    Adicionar
                </a>
            </div>
        </div>
    </div>

