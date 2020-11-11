<!--  
	Desenvolvido por https://github.com/AlexandroLuis
	Versão 1.0 - 2020
-->
<?php
	ini_set('display_errors', 0 );
	error_reporting(0);
	
	//include('verifica_login.php');
?>
<html>
	<head>
		<title>Informações do exercicio</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Style/style.css">
		<link rel="shortcut icon" href="Images/favicon.ico" />	
		<script src="https://apis.google.com/js/platform.js" async defer></script> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<meta name="google-signin-client_id" content="384602407862-g2t95qbtuto07r923qlic2317dbrkboa.apps.googleusercontent.com">
		<script>
			pre{
				padding: 10px;
				margin: 0 0 10px;
				font-size: 13px;
				color: #000;
			}
		</script>
	</head>
<body>
	<ul><!-- Menu Inicial -->
		<li style="float:left"><a href="UserProfile.php">Bem Vindo, <?php echo $_SESSION['userName'];?>!</a></li>
		<li style="float:right"><a href="">Sair</a></li>
		<li style="float:right"><a href="MainInformationPage.php">Voltar</a></li>	
	</ul><!-- Fim Menu Inicial -->

    <h2 align ="left">Informações do Exercicio <?php  $id=$_GET['id']; echo"$id"; ?>!</h2><br>
	
	<!-- Recebe Um id Por Parametro e Mostra as informações do exercicio -->
	<?php
		require('Connection.php');
					
		$result = mysqli_query($db, "SELECT * FROM exercicio where id=$id");

		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>
				<td></td>
				<td>" ."<a href=editarproblema.php?id=".$row['id'] .">".$row['id'] ."</a></td>
				<td>" ."<a href=https://www.urionlinejudge.com.br/judge/pt/problems/view/".$row['id'] .">".$row['name'] ."</a></td>
				<td>" .$row['class'] ."</td>
				<td>" .$row['level'] ."</td>
				<td>" .$row['description'] ."</td>
				<td>" .$row['type'] ."</td>
				<td>" .$row['level2pc'] ."</td>";							
		}

	?>
	<pre background color="white">
		<?php
			require('Connection.php');
					
			$result = mysqli_query($db, "SELECT * FROM exercicio where id=$id");
					
			$row = mysqli_fetch_assoc($result);
			$texto = $row['source'];
			printf("%s", $texto);
			mysqli_free_result($result);
		?>
	</pre>
</body>
</html>