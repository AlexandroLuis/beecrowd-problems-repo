<?php
	session_start();
	unset($_COOKIE['usuario']);	 
	session_destroy();

	header("Location: index.php");
	exit;
?>