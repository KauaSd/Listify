<?php 

#iniciar sessão
session_start();

#Base de dados
include 'db.php';

include 'header.php';

#Conteúdo da página

if(isset($_SESSION['verificacao'])){//se existir um login
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'home';
	}
}

else{
		$pagina = 'login';
}

switch ($pagina) {
	case 'addTarefa': include 'view/addTarefa.php'; break;
	case 'mensal': include 'view/mensal.php'; break;
	case 'home': include 'view/home.php'; break;
	default: include 'view/login.php'; 
	break;
}

