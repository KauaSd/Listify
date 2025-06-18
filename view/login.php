<title> Login | Listify </title>
<body class="loginPage">
	<div class="divzonalogin">
		<div class="Header">
			<div class="FundoHeader">
				<div class="ListifyImg">
					<img src="imgs/listify branco.png" class="imgheader" alt="">
				</div>
			</div>
		</div>
		<div class="formlogin">
			<div class="quadradologin">
				<h1>Entre em sua conta</h1>
				<br>
				<form method="post" action="verificacao.php">
					<label>Nome de Usuário:</label><br>
					<input type="text" name="usuario" placeholder="Digite o nome do usuário">
					<br><br>
					<label>Senha:</label><br>
					<input type="password" name="senha" placeholder="Digite a senha">
					<br><br>
					<input type="submit" value="Entrar" class="btnentrar">
				</form>
			</div>
		</div>
		<br>
	</div>
	<?php if (isset($_GET['erro'])){ ?>
		<div class="alert" role="alert">
			Usuário e/ou senha inválido(s).
		</div>
	<?php } ?>
</body>