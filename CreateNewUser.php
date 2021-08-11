<?php

	$usuario = $_POST['usuario'];
	$senha = MD5($_POST['senha']);
	
	require('Connection.php');
	
	//$connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
	//$db = mysql_select_db('nome_do_banco_de_dados');
	$query_select = "SELECT usuario FROM usuario WHERE usuario = '$usuario'";
	$select = mysqli_query($db, $query_select);
	$array = mysqli_fetch_array($select);
	$logarray = $array['usuario'];

		if($usuario == "" || $usuario == null)
			echo"<script language='javascript' type='text/javascript'> alert('O campo login deve ser preenchido');window.location.href='index.php';</script>";		
		else{
			if($logarray == $usuario){
				echo"<script language='javascript' type='text/javascript'> alert('Esse login já existe');window.location.href='index.php';</script>";
				die();
			}else{
				$query = "INSERT INTO usuario (usuario,senha) VALUES ('$usuario','$senha')";
				$insert = mysqli_query($db, $query);
				if($insert)
					echo"<script language='javascript' type='text/javascript'> alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
				else
					echo"<script language='javascript' type='text/javascript'> alert('Não foi possível cadastrar esse usuário');window.location.href='index.php'</script>";
			}
		}	
?>