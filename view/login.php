<style>
	body{
		all:unset;
	}
	.ListifyImg{
  height: 10vh;
  background-color: #21A179;
}

</style>
<div class="Header">
	<div class="ListifyImg">
		<img src="" alt="">
	</div>
</div>
<h1>Entre na sua conta</h1>

<form method="post" action="verificacao.php">
	<label>Digite o nome do usuário</label><br>
	<input type="text" name="usuario" placeholder="Nome do usuário">
	<br><br>
	<label>Digite a senha</label><br>
	<input type="password" name="senha" placeholder="Senha">
	<br><br>
	<input type="submit" value="Entrar">
</form>
<br>
<?php if (isset($_GET['erro'])){ ?>
	<div class="alert" role="alert">
		Usuário e/ou senha inválido(s).
	</div>
<?php } ?>