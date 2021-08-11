<!--  
	Desenvolvido por https://github.com/AlexandroLuis
	Versão 1.0 - 2020
-->
<?php
	ini_set('display_errors', 0 );
	error_reporting(0);
	
	require('Connection.php');
	
	session_cache_expire(60);
	session_start(); 
	
	/* REALMENTE PHP ... */
		$_SESSION['usuario'] = $_COOKIE['usuario'];
		$_SESSION['id'] = $_COOKIE['id'];

	if(!$_SESSION['usuario']) {
		header('Location: index.php');
		exit();
	}

	$id=$_GET['id'];
	
?>
<html>
	<head>	
		<meta charset="utf-8">
		<title>Perfil de Usuario</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Style/style.css">
		<link rel="shortcut icon" href="Images/favicon.ico" />
		<script src="https://apis.google.com/js/platform.js" async defer></script> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<meta name="google-signin-client_id" content="384602407862-g2t95qbtuto07r923qlic2317dbrkboa.apps.googleusercontent.com">
	</head>
<body>
	<ul><!-- Menu Inicial -->
		<li style="float:left"><a href="UserProfile.php"><?php session_start(); echo "Olá, ". $_SESSION['usuario']; ?>!</a></li>
		<li style="float:right"><a href="logout.php">Sair</a></li>
		<li style="float:right"><a href="MainInformationPage.php">Página de Problemas</a></li>	
	</ul><!-- Fim Menu Inicial -->

	
	<form class="form-style-8" action="EditUserProfileMysqlConnection.php" method="GET" />
		<div style="float:center">	
			<h5 style="float:left">Editar Senha:</h5>
			<input name="id" type="hidden" value ="<?php echo $row['id']?>"<br>
			<input name="usuario" type="hidden" value ="<?php echo $row['usuario']?>"<br>
			<input type="text" class="w3-input" name="senha" size="50"><br>
			<input type="submit" style="float:right" value="Editar"/><br><br>
		</div>
	</form>

</body>
</html>