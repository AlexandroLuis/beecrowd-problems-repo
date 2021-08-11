<?php
	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);
	
	require('Connection.php');
	
	$verifica = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha' limit 1";
	$resultado_usuario = mysqli_query($db, $verifica);
	$resultado = mysqli_fetch_assoc($resultado_usuario);
	
	if(isset($resultado)) {
		$_SESSION['id'] = $resultado['id'];
		$_SESSION['usuario'] = $resultado['usuario'];
		header("Location:MainInformationPage.php");
	}
	else{
		echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
		die();
	}
?>