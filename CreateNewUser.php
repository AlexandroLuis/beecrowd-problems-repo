<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Criar Usuario - BeeCrowd Problems</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
  <link rel="stylesheet" href="Style/style_index.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="POST" action="CreateNewUserMysqlConnection.php">
				<div class="login__field">
					<i class="login__icon fas fa-key"></i>
					<input type="text" class="login__input" name="admkey" placeholder="Chave de Administrador">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="usuario" placeholder="Usuario">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name="senha" placeholder="Senha">
				</div>
				<button class="button login__submit">
					<span class="button__text">Cadastrar</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<div class="social-login">
				<br><br>
				<h3>Entre em sua conta</h3><a href="index.php" style="text-decoration: none; color: white">Clique Aqui</a>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
  
</body>
</html>
