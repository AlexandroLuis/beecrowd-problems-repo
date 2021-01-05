<!--  
	Desenvolvido por https://github.com/AlexandroLuis
	Versão 1.0 - 2020
-->
<?php
	ini_set('display_errors', 0 );
	error_reporting(0);
			
	session_cache_expire(60);
	session_start(); 

	if(!$_SESSION['usuarioNome']) {
		header('Location: index.php');
		exit();
	}
?>
<html>
	<head>	
		<meta charset="utf-8">
		<title>Perfil de Usuario</title>
		<meta http-equiv="refresh" content="2; url=MainInformationPage.php">
		<script type="text/javascript"></script>
		<link rel="shortcut icon" href="Images/favicon.ico" />
	</head>
</html>