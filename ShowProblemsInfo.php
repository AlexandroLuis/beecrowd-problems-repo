<?php
	ini_set('display_errors', 0 );
	error_reporting(0);
	
	session_cache_expire(60);
	session_start(); 
	
	$id=$_GET['id'];
	require('Connection.php');
	$result = mysqli_query($db, "SELECT * FROM exercicio where id=$id");
	$row = mysqli_fetch_assoc($result);

	if(!$_SESSION['usuario']) {
		header('Location: index.php');
		exit();
	}
?>
<html>
	<head>
		<title>Informações do exercicio</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="Style/style.css">
		<link rel="shortcut icon" href="Images/favicon.ico" />	
		<script src="https://apis.google.com/js/platform.js" async defer></script> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<meta name="google-signin-client_id" content="384602407862-g2t95qbtuto07r923qlic2317dbrkboa.apps.googleusercontent.com">
	</head>
<body>
	<ul><!-- Menu Inicial -->
		<li style="float:left"><a href="UserProfile.php"><?php session_start(); echo "Olá, ". $_SESSION['usuario']; ?>!</a></li>
		<li style="float:right"><a href="Logout.php">Sair</a></li>
		<li style="float:right"><a href="MainInformationPage.php">Voltar</a></li>
		<li style="float:right"><a href="https://e2pc.github.io/">Compilador Online</a></li>	
		<li	style="float:right"><?php echo"<a href=EditProblemInfo.php?id=".$row['id'] .">Editar Problema</a>" ?></li>		
	</ul><!-- Fim Menu Inicial -->

	<!-- Recebe Um id Por Parametro e Mostra as informações do exercicio -->
    <h2 align ="center">Informações do Exercicio 
		<?php  
			$id=$_GET['id'];
			require('Connection.php');
						
			$result = mysqli_query($db, "SELECT * FROM exercicio where id=$id");

			while($row = mysqli_fetch_assoc($result)){
				echo"<tr>
					 <td></td>
					 <td>" .$row['id'] .",</td>
					 <td>" .$row['name'] ."!</td>";
			}
		?>
	</h2>
	<h4 align ="center">Indexado por 
		<?php  
			$id=$_GET['id'];
			require('Connection.php');
						
			$result = mysqli_query($db, "SELECT * FROM exercicio where id=$id");

			while($row = mysqli_fetch_assoc($result)){
				echo $row['uploader']  ;
			}
		?>.
	</h4>
	<h4 align ="left"> 
		<?php  
			$id=$_GET['id'];
			require('Connection.php');
						
			$result = mysqli_query($db, "SELECT * FROM exercicio where id=$id");

			while($row = mysqli_fetch_assoc($result)){
				echo"Descrição: " .$row['description'] ."\n";
				?><br><br><?php
				echo"Observações: " .$row['Observation'] ."";
			}
		?>
	</h4>

	<div style="background: #ffffff; overflow:auto;height:68%;width:auto;border:solid blue;border-width:.1em .8em .1em .8em;padding:.2em .6em;">
		<textarea readonly style="border: none;outline: none;width: 100%;height: 100%;resize:none;">
		<?php
			echo "\n";
			require('Connection.php');
					
			$result = mysqli_query($db, "SELECT * FROM exercicio where id=$id");
					
			$row = mysqli_fetch_assoc($result);
			$texto = $row['source'];
			printf("%s", $texto);
			mysqli_free_result($result);
		?>
		</textarea>
	</div>
</body>
</html>