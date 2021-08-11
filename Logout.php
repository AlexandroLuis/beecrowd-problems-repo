<?php
	session_start();
	
	$_SESSION['id'] = $_COOKIE['id'];
	$_SESSION['usuario'] = $_COOKIE['usuario'];
	$_SESSION['senha'] = $_COOKIE['senha'];
	
	unset(
		$_SESSION['id'],
		$_SESSION['usuario'],
		$_SESSION['senha']
	);
	
	session_destroy();
	
	$_SESSION['logindeslogado'] = "Deslogado com sucesso";
	
	if(!$_SESSION['usuario'])
		header("Location: index.php");
	else
		echo "erro";
?>