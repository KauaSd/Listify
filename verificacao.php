<?php

include 'db.php';

$user = $_POST['usuario'];//Para evitar o sql injection x' or 1=1 or 'x'
$pass = $_POST['senha'];

$query = "SELECT*FROM usuario WHERE nmUsuario = '$user' and senhaUsuario = '$pass'";

$consulta = mysqli_query($conexao, $query);

if (mysqli_num_rows($consulta)==1){
	/*echo 'login feito com sucesso';*/

	session_start();
	$_SESSION['verificacao']=true;
	$_SESSION['usuario']=$usuario;
	
	header('location:index.php');
}
else{
	/*echo 'usuário e/ou senha inválido(s)';*/
	header('location:index.php?erro');	
}