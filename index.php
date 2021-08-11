<!--  
	Desenvolvido por https://github.com/AlexandroLuis
	Versão 1.0 - 2020
-->
<html>
	<head>

		
	</head>
<body>
	<?php
		session_start();
		if (! empty($_POST) && $_POST['usuario'] === 'usuario' && $_POST['senha'] === 'senha'){
			$_COOKIE['logged_in'] = true;
			header('Location: MainInformationPage.php');
		}
		else{
	?>
			<div class="container">
				<form method="POST" action="CreateNewUser.php">
					<label>Login:</label><input type="text" name="usuario" id="usuario"><br>
					<label>Senha:</label><input type="password" name="senha" id="senha"><br>
					<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
				</form>
			</div>
				<form method="POST" action="VerifyUserProfile.php">
					<label>Login:</label><input type="text" name="usuario" id="usuario"><br>
					<label>Senha:</label><input type="password" name="senha" id="senha"><br>
					<input type="submit" value="entrar" id="entrar" name="entrar"><br>
					<a href="cadastro.html">Cadastre-se</a>
				</form>
			</div>
    <?php
		}
	?>
</body>
</html>