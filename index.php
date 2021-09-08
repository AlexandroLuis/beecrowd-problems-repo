<!--  
	Desenvolvido por https://github.com/AlexandroLuis
	Versão 1.0 - 2020
-->
<html>
	<head>
		<meta charset="utf-8">
		<title>Página Inicial</title>
	</head>
	<style>
		.container {
		width: 100vw;
		height: 100vh;
		display: flex;
		flex-direction: row;
		justify-content: center;
		align-items: center;
		}
		.box {
		width: 300px;
		height: 300px;
		}
		body {
		margin: 0px;
		}
	</style>
<body>
	<div class="container">
		<div class="box">
			<form method="POST" action="CreateNewUser.php">
				<h1>Cadastre-se</h1>
				<label>Adm Key:</label><input type="text" name="admkey" id="admkey"><br>
				<label>Login:</label><input type="text" name="usuario" id="usuario"><br>
				<label>Senha:</label><input type="password" name="senha" id="senha"><br>
				<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
				</form>
			<form method="POST" action="VerifyUserProfile.php">
				<h1>Login</h1>
				<label>Login:</label><input type="text" name="usuario" id="usuario"><br>
				<label>Senha:</label><input type="password" name="senha" id="senha"><br>
				<input type="submit" value="entrar" id="entrar" name="entrar"><br>
				<!--<a href="cadastro.html">Cadastre-se</a>-->
			</form>
		</div>
	</div>
</body>			
</html>