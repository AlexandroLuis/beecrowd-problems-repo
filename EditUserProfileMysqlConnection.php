<!--  
	Desenvolvido por https://github.com/AlexandroLuis
	Versão 1.0 - 2021
-->
<html>
<head>
	<meta charset="utf-8">
	<title>Editando...</title>
	<meta http-equiv="refresh" content="1; url=UserProfile.php">
	<script type="text/javascript"></script>
	<link rel="shortcut icon" href="Images/favicon.ico" />
</head>
<body>
	<?php 
		$id=$_GET['id'];
		$nome=$_GET['nome'];
		$senha=$_GET['senha'];

		require('Connection.php');
		
		$alterar ="update usuario set id='$id', nome='$usuario', senha='$senha' where id='$id' ";
		mysqli_query($db,$alterar) or die ('Não foi possível alterar');
	?>
	<h1>Alterado Com Sucesso!</h1>
</body>
</html>